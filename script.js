
    function logout() {
      var a = confirm("Do you want to logout?");
      if (a) {
          window.location.href = "fenetre.php";
      } else {
          return false;
      }
    }