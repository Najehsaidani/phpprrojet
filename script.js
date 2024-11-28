
    function logout() {
      var a = confirm("Do you want to logout?");
      if (a) {
          window.location.href = "home.php";
      } else {
          return false;
      }
    }