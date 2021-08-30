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
          <a class="pdf" target="_blank" href="/dashboard/docs/auto-start-xampp.pdf"> Download PDF
            <span>auto-start-xampp.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Auto-Start XAMPP</h1>
        <div class="paragraph">
          <p>By default, you have to start XAMPP or its components manually every time you reboot your system. However, you can also configure XAMPP components to start automatically on system boot. Follow the steps below.</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Launch the XAMPP control panel.</p>
            </li>
            <li>
              <p>Stop all the running XAMPP components by clicking the "Stop" button next to each component.</p>
            </li>
            <li>
              <p>Click the "Service" button next to each component to install it as a service. Click "Yes" when prompted to confirm. This will install the corresponding service and set it to start automatically on boot.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/auto-start-xampp/image1.png" alt="image1">
                </div>
              </div>
            </li>
            <li>
              <p>Reboot your system and the selected components should start automatically.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>To revert the changes, simply uncheck the selected services in the XAMPP control panel.</p>
        </div>
      </article>
    </div>
  </div>
</div>