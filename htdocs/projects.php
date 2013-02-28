<?php
$projects = array(
	'<a href="http://gcc.gnu.org/">GCC: The GNU Compiler Collection</a>',
	'<a href="http://www.gnu.org/software/binutils/">GNU Binutils</a>',
	'<a href="http://www.gnu.org/software/gdb/">GDB: The GNU Project Debugger</a>',
	'<a href="http://fedoraproject.org/wiki/MinGW">Fedora cross-compiler</a>',

	'<a href="http://uhexen2.sf.net/">Hexen II: Hammer of Thyrion</a>',
	'<a href="http://ffmpeg.mplayerhq.hu/">FFmpeg</a>',
	'<a href="http://www.opensc-project.org/">OpenSC</a>',
	'<a href="http://wiki.winehq.org/Wine64">Wine</a>',
	'<a href="http://mamedev.org/">MAME</a> (Yes, the arcade emulator!)',

	'<a href="http://www.reactos.org/en/index.html">ReactOS</a>',
	'<a href="http://www.videolan.org/vlc/">VideoLAN VLC</a>',
	'<a href="http://sourceware.org/pthreads-win32/">pthreads</a>',
	'<a href="http://www.openssl.org/">OpenSSL</a>',
	'<a href="http://www.wxwidgets.org/">wxWidgets</a>',
	'<a href="http://www.codeblocks.org/">Code::Blocks</a>',

	'<a href="http://www.fltk.org/">FLTK</a>',
	'<a href="http://sbcarchiver.cjb.net/">SBC Archiver</a>',
	'<a href="http://www.eligis.com/">OpenLisp</a>',
	'<a href="http://www.gtk.org/download-windows-64bit.html">GTK+</a>',
	'<a href="http://gimp-win.sourceforge.net/stable.html">GIMP</a>',
	'<a href="http://www.mpg123.de/">mpg123</a>',

	'<a href="http://factorcode.org/">Factor</a>',
	'<a href="http://jpen.sf.net/">JPen</a>',
	'<a href="http://www.iauxsoft.com/">iAuxSoft</a>',
	'<a href="http://remood.sf.net/">ReMooD</a>',
	'<a href="http://emergedesktop.org">Emerge Desktop</a>',
	'<a href="http://www.mega-nerd.com/libsndfile/">libsndfile</a>',

	'<a href="http://www.wxperl.co.uk/building/msw.html">wxPerl PPMs</a>',
	'<a href="http://www.zlib.net/">zlib</a>',
	'<a href="http://www.r-project.org/">The R Project for Statistical Computing</a>',
	'<a href="http://www.perl.org/">Perl</a> (5.12.0 and later)',
	'<a href="http://strawberryperl.com/">Strawberry Perl</a> (contains bundled mingw-w64 gcc toolchain)',
	'<a href="http://quakespasm.sourceforge.net/">QuakeSpasm</a>',
	'<a href="http://www.gnu.org/software/gsasl/">GNU SASL</a>',
	'<a href="http://www.gnu.org/software/gnutls/">GnuTLS</a>',
	'<a href="http://www.symscape.com/openfoam-1-7-x-on-windows-64-mpi">OpenFOAM</a>',
	'<a href="http://www.symscape.com/configure-msmpi-for-mingw-w64">MS MPI</a>',
	'<a href="http://xmlsoft.org/">Libxml2</a>',
	'<a href="http://code.google.com/p/barchart-udt/">Barchart-UDT</a>',
	'<a href="http://www.postgresql.org/">PostgreSQL</a>',
	'<a href="http://www.yafaray.org/">YafaRay</a>',
        '<a href="http://libav.org/">libav</a>',
        '<a href="http://www.mpir.org/">MPIR</a>',
        '<a href="http://common-lisp.net/project/mkcl/">ManKai Common Lisp</a>',
        '<a href="https://www.libreoffice.org/">LibreOffice</a>',
        '<a href="http://www.tomahawk-player.org/">Tomahawk Player</a>',
        '<a href="http://mctrl.sourceforge.net/">mCtrl</a>',
        '<a href="http://www.blender.org/">Blender</a>',
        '<a href="http://www.paratools.com/PToolsWIN">PToolsWin - Parallel Tools for Windows Binaries on Linux</a>',
        '<a href="http://www.enlightenment.org/">Enlightenment</a>',
        '<a href="http://kde.org/">KDE Software Collection</a>',
        '<a href="http://devkitpro.org/">devkitPro</a>',
        '<a href="http://fc-solve.shlomifish.org/">Freecell Solver</a>',
        '<a href="http://libvirt.org/">libvirt</a>',
        '<a href="http://smartmontools.sourceforge.net/">smartmontools</a>',
        '<a href="http://freeverb3.sourceforge.net/">Freeverb3</a>',
        '<a href="http://www.vsxu.com/">VSXu</a>',
        '<a href="http://www.graphicsmagick.org/">GraphicsMagick</a>',
        '<a href="http://www.imagemagick.org/">ImageMagick</a>',
        '<a href="http://www.boost.org/">Boost</a>',
        '<a href="http://botan.randombit.net/">Botan</a>',
        '<a href="http://www.woodem.eu/">Woo</a>',
        '<a href="http://qt-project.org/">Qt 4.8.3</a>',
        '<a href="http://www.ecere.com/">Ecere SDK - eC compiler, GUI toolkit, and IDE</a>'
        '<a href="http://code.google.com/p/windows-package-manager/">Npackd</a>');

	shuffle($projects);
	foreach($projects as $project) echo '<li>'.$project.'</li>';

	echo '<li><strong><a href="mailto:mingw-w64-public@lists.sourceforge.net">Add your project!</a></strong></li>';

?>
