 // Get all navigation links
 const navItems = document.querySelectorAll('.nav-items');

 // Loop through each link and add click event listener
 navItems.forEach(item => {
     item.addEventListener('click', function(event) {
         // Prevent default anchor behavior if you want to stay on the same page for testing
         // event.preventDefault();

         // Remove 'active' class from all nav-items
         navItems.forEach(nav => nav.classList.remove('active'));

         // Add 'active' class to the clicked link
         this.classList.add('active');
     });
 });