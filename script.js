document.addEventListener('DOMContentLoaded', function() {
    var wifiIcon = document.getElementById('wifi-icon');
    var toastContainer = document.getElementById('toast-container');
    
    var toast = document.createElement('div');
    toast.className = 'toast';
    
    if (navigator.onLine) {
      toast.textContent = 'Koneksi stabil.';
    } else {
      toast.textContent = 'Koneksi terputus.';
      toast.classList.add('error');
    }
    
    toastContainer.appendChild(toast);
    
    setTimeout(function() {
      toast.classList.add('show');
      
      setTimeout(function() {
        toast.classList.remove('show');
        
        setTimeout(function() {
          toastContainer.removeChild(toast);
        }, 300);
      }, 3000);
    }, 100);
  
    window.addEventListener('online', function() {
      wifiIcon.style.color = '#00ff00';
    });
  
    window.addEventListener('offline', function() {
      wifiIcon.style.color = '#ff0000';
    });
  });
  