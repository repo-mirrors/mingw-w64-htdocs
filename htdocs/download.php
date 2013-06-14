<?php
  $page_title = 'Downloads';
  $page_name = 'download';
  $page_authors = 'Adrien Nader';

  include('inc/header.php');
  include('inc/navigation.php');
  include('inc/right.php');
?>
  <div id="middle">
    <h1>Downloads</h1>
    There are several available builds related to the Mingw-w64 project.
    Each provides different versions and features.
    <ul class="features">
      <li class="features">Host: the architecture the toolchain runs on.</li>
      <li class="features">Target: the architecture the toolchain builds for.</li>
      <li class="features">
        CRT: C runtime (base C functions and API).
        <ul class="feature-values">
          <li>v2: Unicode entry points, DLL delayed loader, Driver Development
          Kit (from ReactOS), DirectX Development Kit (from Wine), POSIX-style
          large file system, C99 math, C99 printf/scanf and C++ style
          no-inline.</li>
          <li>v3 (trunk): adds improved C99 math, wide variants for C99 printf
          and scanf.</li>
        </ul>
      </li>
      <li class="features">
        C++ Exception Model:
        <ul class="feature-values">
          <li>SJLJ: slower but compatible for everything.</li>
          <li>Dwarf2: faster but exceptions cannot be thrown across DLL boundaries and has some bugs or limitations.</li>
          <li>SEH: fastest but 64-bit only because of a <a href="http://patft.uspto.gov/netacgi/nph-Parser?Sect1=PTO1&amp;Sect2=HITOFF&amp;d=PALL&amp;p=1&amp;u=%2Fnetahtml%2FPTO%2Fsrchnum.htm&amp;r=1&amp;f=G&amp;l=50&amp;s1=5,628,016.PN.&amp;OS=PN/5,628,016&amp;RS=PN/5,628,016">patent</a>.</li>
        </ul>
      </li>
      <li class="features">
        GCC Threading Model: Win32 is default while POSIX allows C++11
        threading.</li>
      <li class="features">Package Manager: simplifies management of software (install, remove, update).</li>
      <li class="features">Additional Software: software not part of the toolchain but available (possibly through a package manager).</li>
    </ul>

    <br/>

    <div class="toolchain">
      <h2>Automated Builds</h2>
      <p>The automated builds are built on volunteers' machines with buildbot.
      The builds are triggered daily for several configurations, each time
      using the most recent source available for GCC, binutils and the CRT.</p>
      <table>
        <tr>
          <th>Languages</th>
          <th>C++ Exceptions</th>
          <th>GCC Threading Model</th>
        </tr>
        <tr>
          <td>C, C++</td>
          <td>SJLJ</td>
          <td>Win32</td>
        </tr>
      </table>
      <br/>
      <table>
        <tr>
          <th>Host</th>
          <th>Target</th>
          <th>Date</th>
          <th>Download</th>
        </tr>
        <tr>
          <td rowspan="2">Darwin 32</td>
          <td>i686</td>
          <td>2013/05/31</td>
          <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Automated%20Builds/mingw-w32-bin_i686-darwin_20130531.tar.bz2/download">SourceForge</a></td>
        </tr>
        <tr>
          <td>x86_64</td>
          <td>2013/06/01</td>
          <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Automated%20Builds/mingw-w64-bin_i686-darwin_20130601.tar.bz2/download">SourceForge</a></td>
        </tr>
        <tr>
          <td rowspan="2">Linux 32</td>
          <td>i686</td>
          <td>2013/05/23</td>
          <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Automated%20Builds/mingw-w32-bin_i686-linux_20130523.tar.bz2/download">SourceForge</a></td>
        </tr>
        <tr>
          <td>x86_64</td>
          <td>2013/05/23</td>
          <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Automated%20Builds/mingw-w64-bin_i686-linux_20130523.tar.bz2/download">SourceForge</a></td>
        </tr>
        <tr>
          <td rowspan="2">Linux 64</td>
          <td>i686</td>
          <td>2013/06/07</td>
          <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Automated%20Builds/mingw-w32-bin_x86_64-linux_20130607.tar.bz2/download">SourceForge</a></td>
        </tr>
        <tr>
          <td>x86_64</td>
          <td>2013/06/07</td>
          <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Automated%20Builds/mingw-w64-bin_x86_64-linux_20130607.tar.bz2/download">SourceForge</a></td>
        </tr>
      </table>
      <p>
        <strong>Additional Software</strong>: None.
      </p>
      <p>
        <strong>NB</strong>: the naming scheme for the files is described on the <a href="http://sourceforge.net/apps/trac/mingw-w64/wiki/download%20filename%20structure">wiki</a>.
      </p>
    </div>

    <br/>

    <div class="toolchain">
      <h2>Cygwin</h2>
      <p>The toolchain runs inside Cygwin and can take advantage of its package
      manager.</p>
      <table>
        <tr>
          <th>Languages</th>
          <th>Package Manager</th>
          <th>C++ Exceptions</th>
          <th>GCC Threading Model</th>
        </tr>
        <tr>
          <td>Ada, C, C++, Fortran, Objective-C</td>
          <td>Yes</td>
          <td>SJLJ</td>
          <td>Win32</td>
        </tr>
      </table>
      <br/>
      <table>
        <tr>
          <th>Targets</th><th>GCC</th><th>CRT</th><th>Homepage</th>
        </tr>
        <tr>
          <td>i686, x86_64</td>
          <td>4.5.3</td>
          <td>3.0b_svn5747</td>
          <td><a href="http://www.cygwin.com">Cygwin.com</a></td>
        </tr>
      </table>
      <p>
        <strong>Additional Software</strong>: bzip2, libgcrypt, libgpg-error,
        minizip, xz, zlib.
      </p>
    </div>

    <br/>

    <div class="toolchain">
      <h2>Fedora</h2>
      <p>The Fedora Linux distribution provides packages to cross-compile for
      Windows thanks to the <a
        href="https://fedoraproject.org/wiki/MinGW">Fedora Mingw SIG</a>.</p>
      <table>
        <tr>
          <th>Languages</th>
          <th>Package Manager</th>
          <th>C++ Exceptions</th>
          <th>GCC Threading Model</th>
        </tr>
        <tr>
          <td>Ada, C, C++, Fortran, Objective-C, Objective-C++</td>
          <td>Yum/RPM</td>
          <td>SJLJ</td>
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
        </tr>
        <tr>
          <td>Fedora 17</td>
          <td rowspan="3">i686, x86_64</td>
          <td rowspan="2">4.7.2</td>
          <td>trunk 2012/10/16</td>
        </tr>
        <tr>
          <td>Fedora 18</td>
          <!-- cell is defined by a rowspan in the previous <tr> -->
          <!-- cell is defined by a rowspan in the previous <tr> -->
          <td>trunk 2012/11/10</td>
        </tr>
        <tr>
          <td>Fedora 18</td>
          <!-- cell is defined by a rowspan in the previous <tr> -->
          <td>4.8.0</td>
          <td>trunk 2013/05/09</td>
        </tr>
      </table>
      <p>
        <strong>Additional Software</strong>: GConf2, Qt4, Qt5, SDL,
        angleproject, antlr, atk, atkmm, boost, bzip2, cairo, cairomm, celt,
        clucene, cppunit, curl, cximage, cxxtest, dbus, dbus-glib, dirac,
        dlfcn, eigen3, enchant, expat, fontconfig, freeglut, freetype, ftplib,
        gdb, gdbm, gdk-pixbuf, gettext, glib-networking, glib2, glibmm24, gmp,
        gnutls, goocanvas2, gsl, gst-plugins-bad-free, gst-plugins-base,
        gst-plugins-good, gstreamer, gtk+2, gtk+3, gtk-vnc, gtkglext, gtkhtml3,
        gtkmm24, gtkmm30, gtksourceview3, gtkspell3, gtkspellmm30, harfbuzz,
        hunspell, icu, jasper, lcms, lcms2, libarchive, libffi, libgcrypt,
        libgeotiff, libglade2, libglademm24, libgnurx, libgpg-error, libgsf,
        libidn, libjpeg-turbo, libltdl, libogg, liboil, libosinfo, libp11,
        libpng, libsigc++20, libsigsegv, libsoup, libsqlite3x, libssh2,
        libtasn1, libtiff, libusbx, libvirt, libvirt-glib, libvorbis, libwebp,
        libxml++, libxml2, libxslt, libzip, llvm, matahari, nettle, nsis,
        nsiswrapper, openjpeg, opensc, openssl, orc, p11-kit, pango, pangomm,
        pcre, pdcurses, pixman, plotmm, polyclipping, portablexdr, proj,
        pthreads, qpid-cpp, qwt, readline, sigar, spice-gtk, spice-protocol,
        sqlite, srvany, tcl, termcap, tk, usbredir, w64-tools, webkitgtk,
        webkitgtk3, win-iconv, wine-gecko, winpthreads, winstorecompat, wpcap,
        wxWidgets, xerces-c, xz, zfstream, zlib.</p>
    </div>

    <br/>

    <div class="toolchain">
      <h2>Yypkg Mingw-builds</h2>
      <p><a href="http://yypkg.org/mingw-builds">Yypkg mingw-builds</a>
      provides packages to cross-compile for Windows or build natively.</p>
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
          <td>SJLJ</td>
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
        </tr>
        <tr>
          <td>Linux 64</td>
          <td>i686, x86_64</td>
          <td rowspan="3">4.7.2</td>
          <td rowspan="3">2.0.7</td>
        </tr>
        <tr>
          <td>Windows 32</td>
          <td>i686</td>
          <!-- cell is defined by a rowspan in the previous <tr> -->
          <!-- cell is defined by a rowspan in the previous <tr> -->
        </tr>
        <tr>
          <td>Windows 64</td>
          <td>x86_64</td>
          <!-- cell is defined by a rowspan in the previous <tr> -->
          <!-- cell is defined by a rowspan in the previous <tr> -->
        </tr>
      </table>
      <p>
        <strong>Additional Software</strong>: atk, c-ares, ca-certificates,
        cairo, curl, ecore, edje, eet, eina, elementary, embryo, evas, evil,
        expat, flexdll, fontconfig, freetype, gdk-pixbuf2, gettext, giflib,
        glib-networking, glib2, gmp, gnutls, gperf, gtk+2, icu4c, libarchive,
        libffi, libjpeg, libmpc, libogg, libpng, libsoup, libtheora, libtiff,
        libvorbis, libxml2, libxslt, lua, mpfr, nettle, ocaml, ocaml-findlib,
        openssl, pango, pixman, pkg-config, sqlite, wget, win-iconv, xz, zlib.
        </p>
    </div>

    <br/>

    <div class="toolchain">
      <h2>Source</h2>
        <p>Tarballs for the mingw-w64 sources are hosted on <a href="http://sourceforge.net/projects/mingw-w64/files/mingw-w64/mingw-w64-release/">SourceForge</a>.</p>
        <p>Details on how to get the mingw-w64 code and an SVN-web viewer are available on <a href="http://sourceforge.net/p/mingw-w64/code/HEAD/tree/">SourceForge</a>.</p>
    </div>

    <br/>

    <div class="toolchain">
      <h2>Other Downloads</h2>
      <p>
        There are more toolchains available than the ones mentioned here. Most notable ones are <a href="http://sf.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/rubenvb/">Ruben's</a> and <a href="http://sf.net/projects/mingwbuilds/files/host-windows/releases/4.8.0/32">MingwBuilds</a>.
      </p>
      <p>
        If you maintain toolchains and wish to have it listed on this page, 
please get in touch on <a href="http://mingw-w64.sourceforge.net/mibbit.html">IRC on #mingw-w64 on OFTC</a> or on the <a href="http://lists.sourceforge.net/mailman/listinfo/mingw-w64-public">Mingw-w64-public mailing-list</a>.
      </p>
    </div>
  </div>

<?php include('inc/footer.php'); ?>
