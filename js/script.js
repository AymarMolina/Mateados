document.getElementById('showPopup').addEventListener('click', function() {
    document.getElementById('popupContainer').style.display = 'flex';
  });
  
  
  document.getElementById('popupContainer').addEventListener('click', function(e) {
    if (e.target.id === 'popupContainer') {
      document.getElementById('popupContainer').style.display = 'none';
    }
  });