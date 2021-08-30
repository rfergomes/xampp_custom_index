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
          <a class="pdf" target="_blank" href="/dashboard/docs/configure-wildcard-subdomains.pdf"> Download PDF
            <span>configure-wildcard-subdomains.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Configure Wildcard-Based Subdomains</h1>
        <div class="paragraph">
          <p>Apache&#8217;s virtual hosting feature makes it easy to host multiple websites or web applications on the
            same server, each accessible with a different domain name. However, when you have a large number of virtual
            hosts sharing almost-identical configuration, wildcard-based subdomains simplify maintenance and reduce the
            effort involved in adding a new virtual host.</p>
        </div>
        <div class="paragraph">
          <p>With wildcard subdomains, it&#8217;s no longer necessary to edit the Apache configuration file or restart
            the server to initialize a new virtual host. Instead, you simply need to create a subdirectory matching the
            subdomain name on the server with your content, and Apache will automatically use that directory to serve
            requests for the corresponding subdomain.</p>
        </div>
        <div class="admonitionblock note">
          <table>
            <tr>
              <td class="icon">
                <i class="fa icon-note" title="Note"></i>
              </td>
              <td class="content">
                Virtual hosts created in this manner will not be accessible from other systems, unless those systems are
                separately configured to associate the custom domains used by virtual hosts with the IP address of the
                XAMPP server.
              </td>
            </tr>
          </table>
        </div>
        <div class="paragraph">
          <p>This guide walks you through the process of setting up wildcard virtual hosts with XAMPP, such that
            requests for <em>subdomain.localhost</em> are automatically served by the <em>subdomain/</em> directory of
            the main server document root. Follow the steps below:
            . Change to your XAMPP installation directory (typically, <em>C:\xampp</em>) and open the
            <em>httpd.conf</em> file in the <em>apache\conf\</em> subdirectory using your favourite text editor. Within
            the file, find the following line and uncomment it by removing the hash symbol (#) at the beginning of the
            line.</p>
        </div>
        <div class="literalblock">
          <div class="content">
            <pre>LoadModule vhost_alias_module modules/mod_vhost_alias.so</pre>
          </div>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Next, edit the <em>httpd-vhosts.conf</em> file in the <em>apache\conf\extra\</em> subdirectory of your
                XAMPP installation directory.</p>
            </li>
            <li>
              <p>Replace the contents of this file with the following directives:</p>
              <div class="literalblock">
                <div class="content">
                  <pre>UseCanonicalName Off
&lt;VirtualHost *:80&gt;
       DocumentRoot "C:/xampp/htdocs/"
       ServerName localhost
&lt;/VirtualHost&gt;
&lt;VirtualHost *:80&gt;
       ServerAlias *.localhost
       VirtualDocumentRoot "C:/xampp/htdocs/%1/"
&lt;/VirtualHost&gt;</pre>
                </div>
              </div>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/configure-wildcard-subdomains/image1.png" alt="image1">
                </div>
              </div>
              <div class="paragraph">
                <p>In this configuration, the first virtual host block configures how requests are handled by default.
                  The second block configures wildcard virtual hosting for subdomains, such that requests for
                  <em>subdomain.localhost</em> are automatically served by the <em>subdomain\</em> directory of the
                  <em>C:\xampp\htdocs\</em> directory. In particular, notice the %1 placeholder, which matches the
                  subdomain name from the request URL.</p>
              </div>
            </li>
            <li>
              <p>Restart Apache using the XAMPP control panel for your changes to take effect.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/configure-wildcard-subdomains/image2.png" alt="image2">
                </div>
              </div>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>At this point, your wildcard subdomains are configured. You can easily test this by using the Windows
            Explorer to create two new subdirectories at <em>C:\xampp\htdocs\app01\</em> and
            <em>C:\xampp\htdocs\app02\</em>. Within each subdirectory, create a file named <em>index.html</em> and fill
            it with some sample HTML content. Use different content for each file, so that you can easily distinguish
            that they&#8217;re being served from different directories - for example:</p>
        </div>
        <div class="literalblock">
          <div class="content">
            <pre>&lt;!-- index.html in app01 directory --&gt;
&lt;html&gt;
 &lt;head&gt;&lt;/head&gt;
 &lt;body&gt;
  &lt;h1&gt;Welcome to app01.localhost!&lt;/h1&gt;
 &lt;/body&gt;
&lt;/html&gt;</pre>
          </div>
        </div>
        <div class="literalblock">
          <div class="content">
            <pre>&lt;!-- index.html in app02 directory --&gt;
&lt;html&gt;
 &lt;head&gt;&lt;/head&gt;
 &lt;body&gt;
  &lt;h1&gt;Hello from app02.localhost!&lt;/h1&gt;
 &lt;/body&gt;
&lt;/html&gt;</pre>
          </div>
        </div>
        <div class="paragraph">
          <p>Since these domains do not actually exist in reality, you also need to map them to the local IP address.
            Open the file <em>C:\windows\system32\drivers\etc\hosts</em> in a text editor and add the following line to
            it:</p>
        </div>
        <div class="literalblock">
          <div class="content">
            <pre>127.0.0.1           app01.localhost   app02.localhost</pre>
          </div>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/configure-wildcard-subdomains/image3.png" alt="image3">
          </div>
        </div>
        <div class="admonitionblock tip">
          <table>
            <tr>
              <td class="icon">
                <i class="fa icon-tip" title="Tip"></i>
              </td>
              <td class="content">
                You will need to do this every time you want to configure a new wildcard virtual host, because the
                Windows <em>hosts</em> file does not support wildcard entries. To avoid this step, you can use a DNS
                server or local DNS proxy that supports wildcards and therefore takes care of automatically resolving
                requests for <em>*.localhost</em> to the local IP address.
              </td>
            </tr>
          </table>
        </div>
        <div class="admonitionblock note">
          <table>
            <tr>
              <td class="icon">
                <i class="fa icon-note" title="Note"></i>
              </td>
              <td class="content">
                On some versions of Windows, you will not be able to edit the
                <em>C:\windows\system32\drivers\etc\hosts</em> file without administrator privileges. You can edit the
                file by right-clicking the Notepad icon and selected the "Run as administrator" menu option, then
                entering administrator credentials (if required) and clicking "OK" or "Yes" to proceed.
              </td>
            </tr>
          </table>
        </div>
        <div class="paragraph">
          <p>At this point, you should be able to enter the URLs <a href="http://app01.localhost"
              class="bare">http://app01.localhost</a> or <a href="http://app02.localhost"
              class="bare">http://app02.localhost</a> in your browser&#8217;s address bar, and you should then see the
            corresponding HTML page.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/configure-wildcard-subdomains/image4.png" alt="image4">
          </div>
        </div>
      </article>
    </div>
  </div>

</div>