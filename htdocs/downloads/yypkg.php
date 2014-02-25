<h2 id="win-builds">Win-builds Project</h2>
<div class="toolchain">
  <p><a href="http://win-builds.org">Win-builds</a> provides toolchains and
  libraries to cross-compile for Windows or build natively. The builds are
  fully reproducible and the whole process is documented. It uses a package
  manager to enable painless installation and updates of all components.</p>
  <table>
    <tr>
      <th>Languages</th>
      <th>Package Manager</th>
      <th>C++ Exceptions</th>
      <th>GCC Threading Model</th>
    </tr>
    <tr>
      <td>C, C++</td>
      <td>Yypkg</td>
      <td>SJLJ for i686; SEH for x64</td>
      <td>POSIX</td>
    </tr>
  </table>
  <br/>
  <table>
    <tr>
      <th>Host</th>
      <th>Target</th>
      <th>GCC Version</th>
      <th>CRT</th>
      <th>Homepage</th>
    </tr>
    <tr>
      <td>Linux 64</td>
      <td>i686, x86_64</td>
      <td rowspan="3">4.8.2</td>
      <td rowspan="3">3.1.0</td>
      <td rowspan="3"><a href="http://win-builds.org">win-builds.org</a></td>
    </tr>
    <tr>
      <td>Windows 32</td>
      <td>i686</td>
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <!-- cell is defined by a rowspan in the previous <tr> -->
    </tr>
    <tr>
      <td>Windows 64</td>
      <td>i686, x86_64</td>
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <!-- cell is defined by a rowspan in the previous <tr> -->
      <!-- cell is defined by a rowspan in the previous <tr> -->
    </tr>
  </table>
  <p>
    <strong>Additional Software</strong>: atk, c-ares, ca-certificates,
    cairo, curl, dbus, ecore, edje, eet, eina, elementary, embryo, evas, evil,
    expat, flexdll, fontconfig, freetype, gdk-pixbuf2, gettext, giflib,
    glib-networking, glib2, gmp, gnutls, gperf, gtk+2, icu4c, libarchive,
    libffi, libjpeg, libmpc, libogg, libpng, libsoup, libtheora, libtiff,
    libvorbis, libxml2, lua, mpfr, nettle, ocaml, ocaml-findlib,
    openssl, pango, pixman, pkg-config, sqlite, wget, win-iconv, winpthreads, 
    x264, xz, zlib.
    </p>
</div>

