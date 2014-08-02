<div class="download">
  <h3 id="darwin">Builds running on Darwin (Automated Builds)</h3>
  <div>
    <p>Most current Darwin toolchains have been built through automated builds
    on volunteers' machines with buildbot. These are nightly builds, using
    the then most recent source available for GCC, binutils and the CRT.
    They are therefore experimental and best avoided except for specific reasons.
    </p>
    <table>
      <tr>
        <th>Runs on</th>
        <th>Builds for</th>
        <th>Date</th>
        <th>Languages</th>
        <th>C11/C++11 Threading</th>
        <th>Download</th>
      </tr>
      <tr>
        <td rowspan="2">Darwin 32</td>
        <td>i686</td>
        <td>2013/05/31</td>
        <td rowspan="2">C, C++</td>
        <td rowspan="2">Not supported</td>
        <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Automated%20Builds/mingw-w32-bin_i686-darwin_20130531.tar.bz2/download">SourceForge</a></td>
      </tr>
      <tr>
        <td>x86_64</td>
        <td>2013/06/22</td>
        <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Automated%20Builds/mingw-w64-bin_i686-darwin_20130622.tar.bz2/download">SourceForge</a></td>
      </tr>
    </table>
    <p class="additional-software">
      <strong>Additional Software</strong>: None.
    </p>
  </div>
</div>

<div class="download">
  <h3 id="source">Source</h3>
    Tarballs for the mingw-w64 sources are hosted on <a href="http://sourceforge.net/projects/mingw-w64/files/mingw-w64/mingw-w64-release/">SourceForge</a>.
    The latest version is <a href="http://sourceforge.net/projects/mingw-w64/files/mingw-w64/mingw-w64-release/mingw-w64-v3.1.0.tar.bz2/download">3.1.0</a>.
    Winpthreads is available in the main tarball as of 3.1.0.<br>

    The wiki has instructions for building <a href="http://sourceforge.net/p/mingw-w64/wiki2/Native%20Win64%20compiler/">native</a> and <a href="http://sourceforge.net/p/mingw-w64/wiki2/Cross%20Win32%20and%20Win64%20compiler/">cross</a> toolchains.<br>

    Details on how to get the mingw-w64 code from Git and an Git-web viewer are available on <a href="https://sourceforge.net/p/mingw-w64/mingw-w64/ci/master/tree/">SourceForge</a>.
</div>

<div class="download">
  <h3 id="others">Everything else</h3>
    Rubenvb has built a number of toolchains including some for less common setups. They are split into two categories: toolchains targeting
    <a href="http://sf.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/rubenvb/">Win32</a>
    or <a href="http://sf.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Personal%20Builds/rubenvb/">Win64</a>.<br>

    The <a href="www.opensuse.org">OpenSUSE Linux distribution</a> also has a large and well-maintained set of packages for cross-compilation.<br>

    A very large number of other binaries and sources are hosted in the <a href="http://sf.net/projects/mingw-w64/files/">File Release System on Sourceforge</a> which might have what you are after.<br>

    <strong>Note:</strong> If you maintain toolchains and wish to have it
    listed on this page, please get in touch on
    <a href="http://mingw-w64.sourceforge.net/mibbit.html">IRC on #mingw-w64 on OFTC</a>
    or on the
    <a href="http://lists.sourceforge.net/mailman/listinfo/mingw-w64-public">Mingw-w64-public mailing-list</a>.

</div>
