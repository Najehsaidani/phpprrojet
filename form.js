function toggleForms() {
    document.getElementById('loginForm').classList.toggle('hidden');
    document.getElementById('registerForm').classList.toggle('hidden');
  }

  // Handle registration form submission
  function handleRegister(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const email = document.getElementById('registerEmail').value;
    const password = document.getElementById('registerPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
      alert('Passwords do not match!');
      return;
    }

    alert(`Registration successful for ${username}!`);
  }
  function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('profilePreview');
    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
          preview.src = e.target.result;
      };
      reader.readAsDataURL(input.files[0]);
  }}