<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Port Scanner</title>
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css" />
    <link
      rel="icon"
      href="./assets/dist/img/favicon/favicon-16x16.png"
      sizes="16x16"
    />
    <link
      rel="icon"
      href="./assets/dist/img/favicon/favicon-32x32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      href="./assets/dist/img/favicon/android-chrome-192x192.png"
      sizes="192x192"
    />
    <link
      rel="icon"
      href="./assets/dist/img/favicon/android-chrome-512x512.png"
      sizes="512x512"
    />
    <link
      rel="apple-touch-icon"
      href="./assets/dist/img/favicon/apple-touch-icon.php"
    />
    <meta name="msapplication-TileColor" content="#000000" />
    <meta
      name="msapplication-TileImage"
      content="./assets/dist/img/favicon/favicon.ico"
    />
    <style type="text/css">
      .github-corner:hover .octo-arm {
        animation: octocat-wave 560ms ease-in-out;
      }
      .github-corner > svg {
        fill: #151513;
        color: #fff;
        position: fixed;
        top: 0;
        border: 0;
        right: 0;
      }
      @keyframes octocat-wave {
        0%,
        100% {
          transform: rotate(0);
        }
        20%,
        60% {
          transform: rotate(-25deg);
        }
        40%,
        80% {
          transform: rotate(10deg);
        }
      }
      @media (max-width: 500px) {
        .github-corner:hover .octo-arm {
          animation: none;
        }
        .github-corner .octo-arm {
          animation: octocat-wave 560ms ease-in-out;
        }
      }
    </style>
  </head>
  <body>
    <!--  github -->
    <a
      href="https://github.com/EW-EndWall/port-scanner"
      class="github-corner"
      aria-label="View source on GitHub"
      ><svg width="80" height="80" viewBox="0 0 250 250" aria-hidden="true">
        <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
        <path
          d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
          fill="currentColor"
          style="transform-origin: 130px 106px"
          class="octo-arm"
        ></path>
        <path
          d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
          fill="currentColor"
          class="octo-body"
        ></path>
      </svg>
    </a>
    <!-- header -->
    <div class="container">
      <a
        href="/"
        class="d-flex align-items-center justify-content-center mb-1 mt-3 text-decoration-none mx-auto"
      >
        <img
          class="bi me-2"
          width="92"
          height="42"
          src="./assets/dist/img/logo.svg"
        />
      </a>
      <nav
        class="navbar navbar-expand-lg rounded py-3 mb-4 border-bottom"
        aria-label="Twelfth navbar example"
      >
        <div class="container-fluid">
          <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarsExample10"
            aria-controls="navbarsExample10"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="navbar-collapse justify-content-md-center collapse"
            id="navbarsExample10"
          >
          </div>
        </div>
      </nav>
    </div>
    <!-- header -->

    <!-- url input -->
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-13 text-center">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">
            Paste Check
          </h1>
          <p class="fs-4">
            Type domain name, paste ip port, check.
          </p>
        </div>
        <div class="col-lg-13 col-md-10 mx-auto">
          <div class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            <div class="form-floating mb-3">
              <input
                type="url"
                class="form-control"
                id="getUrl"
                placeholder="https://example.com"
              />
              <label for="getUrl">Domain - Ip</label>
            </div>
            <div class="form-floating mb-3">
              <input
                type="url"
                class="form-control"
                id="getPort"
                placeholder="https://example.com"
              />
              <label for="getPort">Port</label>
            </div>
            <div class="mb-3">
              <input type="url" class="form-control" id="shortUrl" disabled />
            </div>
            <button
              class="w-100 btn btn-lg btn-primary"
              type="submit"
              id="getUrlButton"
            >
              Check
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- url input -->

    <!-- about -->
    <div class="container" name="about">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <a name="about"></a>
        <h1 class="display-4 fw-normal">About</h1>
        <p class="fs-5 text-body-secondary">
        A port checker application is a program or tool used to check the status of a particular port on a destination IP address or domain name. This type of application plays an important role in network security and system administration.
        <br /><br />
        This type of application is important for network security. Open ports on a network can cause potential attacks and security breaches. The port control application allows network administrators or system administrators to detect open ports in their network and close these ports when necessary.
        </p>
      </div>
    </div>
    <!-- about -->

    <!-- footer -->
    <div class="container border-top">
      <footer class="py-3 my-4">
        <a
          href="/"
          class="d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none mx-auto"
        >
          <img
            class="bi me-2"
            width="62"
            height="42"
            src="./assets/dist/img/logo.svg"
          />
        </a>
        <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
      </footer>
    </div>
    <!-- footer -->
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document
        .getElementById("getUrlButton")
        .addEventListener("click", shortUrl);

      function shortUrl() {
        const getUrl = document.getElementById("getUrl").value;
        const getPort = document.getElementById("getPort").value;

        if (getUrl && getPort) {
          // * XMLHTTP create request
          let xhr = new XMLHttpRequest();

          // * request settings
          xhr.open("POST", "./api.php", true);
          xhr.setRequestHeader("Content-Type", "application/json");

          // * request finished
          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
              // * done
              const response = JSON.parse(xhr.responseText);
              document.getElementById("shortUrl").value = response;
            } else if (xhr.readyState === 4 && xhr.status !== 200) {
              //* err
              document.getElementById("shortUrl").value = "Error: " + xhr.status;
            }
          };

          // * request send
          const data = {
            url: getUrl,
            port: getPort,
          };
          xhr.send(JSON.stringify(data));
        }
      }
    </script>
  </body>
</html>
