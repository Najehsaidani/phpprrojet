function handleRegister(event) {
    event.preventDefault();
    
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
  
    if (password !== confirmPassword) {
      alert('Passwords do not match!');
      return;
    }
  
    alert(`Registration successful for ${username}!`);
    // Here, you could add code to send the form data to a server
  }
  function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('profilePreview');}