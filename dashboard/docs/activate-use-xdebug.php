<div id="wrapper">
  <div class="hero">
    <div class="row">
      <div class="large-12 columns">
        <h1>Documentation</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <ul class="sub-nav">
        <li>
          <a class="pdf" target="_blank" href="/dashboard/docs/activate-use-xdebug.pdf"> Download PDF
            <span>activate-use-xdebug.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Activate and Use Xdebug</h1>
        <div class="paragraph">
          <p><a href="http://xdebug.org/">Xdebug</a> is a powerful open source debugger and profiler for PHP. It is included with XAMPP and can be used to display stack traces, analyze code coverage and profile your PHP code.</p>
        </div>
        <div class="paragraph">
          <p>To activate Xdebug, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Edit the <em>php.ini</em> file in the <em>php\</em> subdirectory of your XAMPP installation directory (usually, <em>C:\xampp</em>). Within this file, find the [XDebug] section and within it, add the following configuration directive (or modify the existing one):</p>
              <div class="literalblock">
                <div class="content">
                  <pre>zend_extension = "C:/xampp/php/ext/php_xdebug.dll"</pre>
                </div>
              </div>
            </li>
            <li>
              <p>Restart the Apache server using the XAMPP control panel.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>Xdebug should now be active. To verify this, browse to the URL <a href="http://localhost/xampp/phpinfo.php" class="bare">http://localhost/xampp/phpinfo.php</a>, which displays the output of the <em>phpinfo(</em>) command. Look through the script and verify that the Xdebug extension is now active.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/activate-use-xdebug/image1.png" alt="image1">
          </div>
        </div>
        <div class="paragraph">
          <p>Xdebug overloads the default <em>var_dump(</em>) function with its own version that includes (among other things) color coding for different PHP types, so you can see it in action immediately by using the <em>var_dump()</em> function in a PHP script. For example, create a simple PHP script in the <em>htdocs\</em> subdirectory of your XAMPP installation directory with the following content:</p>
        </div>
        <div class="literalblock">
          <div class="content">
            <pre>&lt;?php
var_dump($_SERVER);</pre>
            <?php echo "<pre>";
            var_dump($_SERVER);
            echo "</pre>"; ?>
          </div>
        </div>
        <div class="paragraph">
          <p>When you view your script through a browser, here&#8217;s an example of what you might see:</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/activate-use-xdebug/image2.png" alt="image2">
          </div>
        </div>
        <div class="paragraph">
          <p>One of Xdebug&#8217;s most powerful features is its ability to profile a PHP script and produce detailed statistics on how long each function call or line of code takes to execute. This can be very useful for performance analysis of complex scripts. To turn on script profiling, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Edit the <em>php.ini</em> file in the <em>php\</em> subdirectory of your XAMPP installation directory. Within this file, find the [XDebug] section and within it, uncomment and modify the lines below so that they look like this:</p>
              <div class="literalblock">
                <div class="content">
                  <pre>xdebug.profiler_append = 0
xdebug.profiler_enable = 1
xdebug.profiler_enable_trigger = 0
xdebug.profiler_output_dir = "C:/xampp/tmp"
xdebug.profiler_output_name = "cachegrind.out.%t-%s"</pre>
                </div>
              </div>
            </li>
            <li>
              <p>Restart the Apache server using the XAMPP control panel.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>At this point, Xdebug profiling is active. Every PHP script that you run will be profiled and the results will be placed in the <em>C:\xampp\tmp</em> as a so-called cachegrind file. You can view this cachegrind file with a tool like <a href="http://sourceforge.net/projects/wincachegrind/">WinCacheGrind</a>, which you must download and install separately.</p>
        </div>
        <div class="paragraph">
          <p>To illustrate how this works, consider the screenshot below, which shows the profiled output of a script using WinCacheGrind. As the screenshot illustrates, it&#8217;s easy to see the entire life cycle of a PHP script, including the call sequence and the amount of time taken by each function, and thereby find targets for further optimization.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/activate-use-xdebug/image3.png" alt="image3">
          </div>
        </div>
        <div class="admonitionblock tip">
          <table>
            <tr>
              <td class="icon">
                <i class="fa icon-tip" title="Tip"></i>
              </td>
              <td class="content">
                To find out more about Xdebug’s powerful features, <a href="http://xdebug.org/docs/">read the Xdebug documentation</a>.
              </td>
            </tr>
          </table>
        </div>
      </article>
    </div>
  </div>

</div>