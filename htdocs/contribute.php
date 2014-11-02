<?php
  $page_title = 'Contribute';
  $page_name = 'contribute';
  $page_authors = '<a href="http://win-builds.org">Adrien Nader of win-builds.org</a>';

  include('inc/header.php');
  include('inc/navigation.php');
?>
  <div id="middle">
    <h2>Contribute</h2>

<p>
Mingw-w64 and the ecosystem surrounding it are stable and with many features.
There are however some topics for which developer-time has been scarce. This
page lists tasks that are relatively simple and can be worked on without the
need for a huge background while still being important and high on the
wish-lists of users.
</p>

<p>
In order to avoid duplicate efforts, if you take on one of these tasks, please
mention it on the
<a href="http://lists.sourceforge.net/mailman/listinfo/mingw-w64-public">
  mailing-list</a>.
</p>

<p>
The tasks below have been split enough to be simple and fairly well-contained
while still being useful on their own. Most could be internship topics.
</p>

<p>
There are references to other websites on this page; their presence does not
constitute an endorsement in any way.
</p>

<h3>SEH for 32bits</h3>
<p>The patent for SEH for 32bits has now expired and while new computers are
all 64 bits, Intel has continued selling Atom CPUs that only handled 32 bits
very late and some applications are still 32 bits. Projects such as Wine and
ReactOS will also benefit from 32bits SEH. Overall the need is still there and
will continue for years to come and will outlast Microsoft's support for
32bits.</p>

<p>Note that you will need FSF paperwork since the work has to be done inside
GCC. Check <a href="https://gcc.gnu.org/contribute.html">GCC's page on
contributing</a>.</p>

<p>
<a href="http://www.google.com/patents/US5628016">
  The now-expired patent on SEH</a>.
</p>

<p>
<a href="http://www.microsoft.com/msj/0197/exception/exception.aspx">
  A Crash Course on the Depths of Win32™ Structured Exception Handling</a>.
</p>

<p>
<a href="http://www.codeproject.com/Articles/82701/Win-Exceptions-OS-Level-Point-of-View">
  Win32 Exceptions – OS Level Point of View</a>.
</p>

<p>
<a href="http://www.codeproject.com/Articles/2126/How-a-C-compiler-implements-exception-handling">
  How a C++ compiler implements exception handling</a>.
</p>

<p>
<a href="http://www.gamedev.net/page/resources/_/technical/general-programming/structured-exception-handling-basics-r1272">
  Structured Exception Handling Basics</a>.
</p>

<p>
<a href="http://www.gamedev.net/page/resources/_/technical/general-programming/windows-seh-and-c-exception-handling-r1291">
  Windows' SEH and C++ Exception Handling </a>.
</p>

<p>
<a href="http://blogs.msdn.com/b/larryosterman/archive/2004/09/10/228068.aspx">
  Structured Exception Handling Considered Harmful</a>.
</p>

<p>
<a href="http://www.codeproject.com/Articles/422/SEH-and-C-Exceptions-catch-all-in-one">
  SEH and C++ Exceptions - catch all in one</a>.
</p>

<p>
<a href="https://gcc.gnu.org/git/?p=gcc.git">GCC sources</a> and
<a href="https://gcc.gnu.org/git/?p=gcc.git;a=blob;f=libgcc/unwind-seh.c;hb=HEAD">unwind-seh.c</a>
in particular. Note that 32-bit SEH is stack-based and requires code-generation
unline 64bits SEH which is simply table-based (that difference explains why the
patent only mattered to 32bits).
</p>

<h3>Sanitizers (ASAN, TSAN, USAN)</h3>

<p>Sanitizers are runtime checks for a number of situations which have usually
required instrumentation with tools that cause an important slowdown (like
Valgrind).</p>

<p>They are relatively new and much lighter than other approaches.</p>

  <h4>Thorough Status Report for Sanitizers (asan, tsan, usan):</h4>
  <p>ASAN, TSAN and USAN are great technologies which are available in GCC.
  Unfortunately they are not completely usable on Windows. A proper review and
  tests are needed before anything.</p>

  <h4>Fixing remaining bits in asan, tsan or usan (see above):</h4>
  <p>Once a report on the status is available, work on it can be started.</p>

<h3>Link-Time Optimization (LTO)</h3>

<p>Optimizations in C cannot cross compilation units and many of them are
therefore missed in large applications and when using libraries. LTO runs some
optimizations during linking, when the toolchain can see all the objects at
once and run cross-unit optimizations.</p>

  <h4>Thorough Status Report for LTO</h4>
  <p>LTO has recently been improved a lot in GCC and binutils. There are still
  some issues on Windows though. The first step to making it work is to get a
  proper and up-to-date test and to identify the platform-specific bugs.</p>
  <h4>Fixing remaining bits in LTO</h4>
  <p>Fix the issues found by the status report from above. The actual bug list
  will be updated as it becomes available.</p>

<h3>Compiler plugin for Visual Studio</h3>
  <p>A compiler plugin would make GCC, binutils tools and GDB available from
  the Visual Studio IDE. Most people state they stick with VS because of the
  IDE; such a plugin would allow mixing the two.</p>

  <p>
  <a href="http://www.visualgdb.com/">VisualGDB</a> (commercial) provides such
  a plugin, apparently meant for compiling to micro-controllers and Linux
  (Android or not).
  </p>

<h3>Debug Infos</h3>
  <p>PDB is the file-format used by Microsoft to store debug info.
  Unfortunately it is undocumented.</p>
  <h4>Documentation of the PDB file-format</h4>
  <p>Since the format is undocumented, first step is to document it. Fortunately,
  during the past few years, reader and possibly writer code has appeared,
  mostly out of Microsoft.</p>

  <p>
  Microsoft has released
  <a href="http://roslyn.codeplex.com/">Roslyn, a ".NET Compiler Platform"</a>.
  It contains a
  <a href="https://roslyn.codeplex.com/SourceControl/latest#Src/Compilers/Core/Portable/PEWriter/PdbWriter.cs">
    PDB Writer implementation</a>.
  This may be an actual implementation or only an interface to the actual one.
  It is difficult to say without further analysis.
  </p>

  <p>
  Microsoft has also released
  <a href="http://ccimetadata.codeplex.com">CCI Metadata</a> under the
  <a href="http://opensource.org/licenses/ms-pl.html">MS-PL</a>.
  It contains a
  <a href="http://ccimetadata.codeplex.com/SourceControl/latest#Sources/PdbReader/">
    PDB reader implementation</a> that should constitute an appropriate source.
  </p>

  <h4>Creation of PDB files</h4>
  <p>Creating PDB files will allow the Microsoft tools to make meaningful
  backtraces when code built with free compilers is involved.</p>

  <h4>Handling of PDB in GDB</h4>
  <p>Reding PDB files will allow free tools to make meaningful
  backtraces when code built with MSVC is involved.</p>

  <h4>Translation from/to PDB</h4>
  <p>Most often debug informations will only be available in a single format.
  Being able to convert between them when needed will be useful.</p>

<h3>C11 and C++11 Threading Support</h3>
  <h4>C11 Threading and Atomics</h4>
  <p>
  The C11 standard has a section on threading which is still left unimplemented
  on several platforms. The API follows pthreads' quite closely and it is left
  to the implementor to decide whether to base it on winpthreads or directly on
  the (&gt;= Vista) Win32 API.
  </p>

  <p>
  <a href="http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1570.pdf">
    The final C11 draft</a> is identical to the standard but is available freely.
  </p>

  <p>Note that you will need FSF paperwork since the work has to be done inside
  GCC. Check <a href="https://gcc.gnu.org/contribute.html">GCC's page on
  contributing</a>.</p>

  <h4>Implementation of C11 and C++11 Threading Support Without Winpthreads</h4>

  </div>

<?php include('inc/footer.php'); ?>
