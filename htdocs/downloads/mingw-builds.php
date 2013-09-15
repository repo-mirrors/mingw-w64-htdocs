<div class="toolchain" id="mingw-builds">
  <h2>Mingw-builds</h2>
  <p><a href="https://sourceforge.net/projects/mingwbuilds/files/host-windows/releases/">Mingw-builds</a>
  provides native toolchains for Windows. Builds are based on trunk version of the mingw-w64 runtime.
  It has an online <a href="http://sourceforge.net/projects/mingwbuilds/files/mingw-builds-install/mingw-builds-install.exe/download">installer</a>.</p>
  <table>
    <tr>
      <th>Languages</th>
      <th>Installer</th>
      <th>C++ Exceptions</th>
      <th>GCC Threading Model</th>
    </tr>
    <tr>
      <td>C, C++, Fortran</td>
      <td>Yes</td>
      <td>DWARF, SJLJ, SEH</td>
      <td>Win32, Posix</td>
    </tr>
  </table>
  <br/>
  <table>
    <tr>
      <th>Host</th><th>Exception</th><th>Target</th><th>GCC</th><th>Homepage</th>
    </tr>
    <tr>
      <td rowspan="2">Windows 32</td>
      <td>DWARF</td>
      <td>i686</td>
      <td rowspan="4">4.6.2 - 4.8.1</td>
      <td rowspan="4"><a href="https://sourceforge.net/projects/mingwbuilds">Sourceforge.net</a></td>
    </tr>
    <tr>
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <td>SJLJ</td>
      <td>i686, x86_64</td>
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <!-- cell is defined by a rowspan in the previous <tr> -->
    </tr>
    <tr>
      <td rowspan="2">Windows 64</td>
      <td>SEH</td>
      <td>x86_64</td>
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <!-- cell is defined by a rowspan in the previous <tr> -->
    </tr>
    <tr>
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <td>SJLJ</td>
      <td>x86_64, i686</td>
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <!-- cell is defined by a rowspan in the previous <tr> -->
    </tr>
  </table>
  <p>
    <strong>Additional Software</strong>: GDB, Python, zlib, libiconv.
  </p>
</div>

