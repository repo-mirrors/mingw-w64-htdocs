<h2 id="automated-builds">Automated Builds</h2>
<div class="toolchain">
  <p>The automated builds are built on volunteers' machines with buildbot.
  The builds are triggered daily for several configurations, each time
  using the most recent source available for GCC, binutils and the CRT.
  They are therefore experimental and best avoided unless for specific reasons.
  </p>
  <table>
    <tr>
      <th>Languages</th>
      <th>C++ Exceptions</th>
      <th>C11/C++11 Threading</th>
    </tr>
    <tr>
      <td>C, C++</td>
      <td>SJLJ</td>
      <td>Not supported</td>
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
      <td>2013/06/22</td>
      <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Automated%20Builds/mingw-w64-bin_i686-darwin_20130622.tar.bz2/download">SourceForge</a></td>
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
      <td>2013/12/27</td>
      <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Automated%20Builds/mingw-w32-bin_x86_64-linux_20131227.tar.bz2/download">SourceForge</a></td>
    </tr>
    <tr>
      <td>x86_64</td>
      <td>2014/01/21</td>
      <td><a href="http://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Automated%20Builds/mingw-w64-bin_x86_64-linux_20131228.tar.bz2/download">SourceForge</a></td>
    </tr>
  </table>
  <p>
    <strong>Additional Software</strong>: None.
  </p>
  <p>
    <strong>NB</strong>: the naming scheme for the files is described on the <a href="http://sourceforge.net/apps/trac/mingw-w64/wiki/download%20filename%20structure">wiki</a>.
  </p>
</div>
