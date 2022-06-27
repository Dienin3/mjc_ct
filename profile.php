<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Profile - MJC: Teaching & Consulting</title>
    <meta property="og:title" content="Consulting - MJC: Teaching & Consulting" />
    <meta property="og:title" content="About Me - MJC: Teaching & Consulting" />
    <meta property="og:title" content="Training - MJC: Teaching & Consulting" />
    <meta property="og:title" content="Contact - MJC: Teaching & Consulting" />
    <meta property="og:title" content="Courses - MJC: Teaching & Consulting" />
    <meta property="og:title" content="Profile - MJC: Teaching & Consulting" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}
      body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}
      p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}
      button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}
      button,select {  text-transform: none;}
      button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}
      button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}
      button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}
      a {  color: inherit;  text-decoration: inherit;}
      input {  padding: 2px 4px;}
      img {  display: block;}
        
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Titillium Web;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-scheme-grey);
        background-color: var(--dl-color-scheme-yellowishwhite);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
      data-tag="font"
    />

    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./profile.css" rel="stylesheet" />

      <div class="profile-container">
        <div class="profile-navbar navbar-container">
          <div class="profile-max-width max-width">
            <div class="profile-logo">
              <img
                alt="image"
                src="images/Logo.png"
                class="logo"
              />
              <h2 id="logo" class="profile-text brand-Name logoText">
                MJC: Teaching &amp; Consulting
              </h2>
            </div>
            <div class="profile-links">
              <button
                type="button"
                class="profile-button navbar-Link navbarButtons button"
              >
                <span class="profile-text1">Home</span>
              </button>
              <button
                type="button"
                class="profile-button1 navbar-Link navbarButtons button"
              >
                <span class="profile-text2">About Me</span>
              </button>
              <button
                type="button"
                class="profile-button2 navbar-Link navbarButtons button"
              >
                <span class="profile-text3">Teaching</span>
              </button>
              <button
                type="button"
                class="profile-button3 navbar-Link navbarButtons button"
              >
                <span class="profile-text4">Consulting</span>
              </button>
              <button
                type="button"
                class="profile-button4 navbar-Link navbarButtons button"
              >
                <span class="profile-text5">Contact</span>
              </button>
              <button
                type="button"
                class="profile-button5 navbar-Link navbarButtons button"
              >
                <span class="profile-text6">Courses</span>
              </button>
              <button
                type="button"
                class="profile-button6 button-secondary button"
              >
                Login
              </button>
            </div>
            <div class="profile-burger-menu navbar-burger-menu">
              <svg viewBox="0 0 1024 1024" class="profile-icon">
                <path
                  d="M128 256h768v86h-768v-86zM128 554v-84h768v84h-768zM128 768v-86h768v86h-768z"
                ></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="profile-max-width1 max-width"></div>
        <footer class="profile-footer footer">
          <div class="profile-links-container">
            <div class="profile-container1 footer-column">
              <div class="logoContainer">
                <img
                  alt="image"
                  src="images/Logo.png"
                  class="profile-image1 logo"
                />
                <h2 class="profile-heading brand-Name logoText">
                  MJC: T &amp; C
                </h2>
              </div>
            </div>
            <div class="profile-container2">
              <div class="profile-container3">
                <span class="profile-text7">© 2022 Diego Carena-Santiago</span>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script>
      window.onload = () => {
        const runAllScripts = () => {
          initializeAllAccordions()
        }

        const listenForUrlChanges = () => {
          let url = location.href
          document.body.addEventListener(
            'click',
            () => {
              requestAnimationFrame(() => {
                if (url !== location.href) {
                  runAllScripts()
                  url = location.href
                }
              })
            },
            true
          )
        }

        const initializeAllAccordions = () => {
          const allAccordions = document.querySelectorAll('[data-role="Accordion"]');

          allAccordions.forEach((accordion) => {
            const accordionHeader = accordion.querySelector('[data-type="accordion-header"]')
            const accordionContent = accordion.querySelector('[data-type="accordion-content"]')

            accordionHeader.addEventListener('click', () => {
              if (accordionContent.style.maxHeight) {
                accordionContent.style.maxHeight = ''
              } else {
                accordionContent.style.maxHeight = `${accordionContent.scrollHeight}px`
              }
            })
          })
        }

        listenForUrlChanges()
        runAllScripts()
      }
    </script>
  </body>
</html>
