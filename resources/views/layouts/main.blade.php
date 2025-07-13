<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
  
  <style>

    .loader-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #fff;
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: opacity 0.5s;
    }
    
    .loader {
      width: 48px;
      height: 48px;
      border: 3px solid #f3f3f3;
      border-radius: 50%;
      border-top-color: #2e7d32;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    .content {
      opacity: 0;
      transition: opacity 0.5s ease-in 0.3s;
    }

    .loaded .loader-container {
      opacity: 0;
      pointer-events: none;
    }

    .loaded .content {
      opacity: 1;
    }
    
  </style>

  <!-- Preload de recursos -->
  <link rel="preload" href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" as="style">
  <link rel="preload" href="{{ asset('css/styles.css') }}" as="style">
  
  <!-- Hojas de estilo -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" media="print" onload="this.media='all'">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  
  <title>@yield('title')</title>
</head>
<body>
  <!-- Preloader -->
  <div class="loader-container">
    <div class="loader"></div>
  </div>

  <!-- Contenido principal -->
  <div class="content">
    @yield('content')

    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">Copyright &copy; InstApp 2025 - Jobab H. Izquier Torres</div>
          <div>
            <a href="#">Política de Privacidad</a>
            &middot;
            <a href="#">Términos y Condiciones</a>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Control del preloader -->
  <script>
    (function() {
      const startTime = Date.now();
      const minimumDisplay = 1000; // 1 segundo mínimo
      
      function hideLoader() {
        const elapsed = Date.now() - startTime;
        const remaining = Math.max(minimumDisplay - elapsed, 0);
        
        setTimeout(() => {
          document.body.classList.add('loaded');
        }, remaining);
      }

      window.addEventListener('load', hideLoader);
      
      // Backup de seguridad
      setTimeout(hideLoader, 5000);
    })();
  </script>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="{{ asset('js/scripts.js') }}" defer></script>
  <script src="{{ asset('js/datatables-simple-demo.js') }}" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" defer></script>
</body>
</html>