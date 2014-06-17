<h2 id="mingw-builds">Mingw-builds Project</h2>
<div class="toolchain">
  <p><a href="https://sourceforge.net/projects/mingwbuilds/files/host-windows/releases/">Mingw-builds</a>
  provides native toolchains for Windows. Builds are based on trunk version of the mingw-w64 runtime.
  It has an online <a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/mingw-builds/installer/mingw-w64-install.exe/download">installer</a>.</p>
  <table>
    <tr>
      <th>Runs on</th>
      <th>Builds for</th>
      <th>GCC</th>
      <th>CRT</th>
      <th>Languages</th>
      <th>C11/C++11 Threading</th>
      <th>Package Manager</th>
      <th>Installation</th>
    </tr>
    <tr>
      <td>Windows 32/64</td>
      <td>i686, x86_64</td>
      <td>4.8.2 - 4.9.0</td>
      <td>Trunk</td>
      <td>C, C++</td>
      <td>To be chosen during installation</td>
      <td>No</td>
      <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/mingw-builds/installer/mingw-w64-install.exe/download">SourceForge</a></td>
    </tr>
  </table>
  <p>
    <strong>Note</strong>: toolchains using DWARF for exception handling are
    also available and faster than SJLJ but you shouldn't use them unless
    you're aware of their bugs and limitations.
  </p>
    <strong>Additional Software</strong>: GDB, Python, zlib, libiconv.
  </p>
</div>

