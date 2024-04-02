<?php wp_footer() ?>
<section class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__social">
            <ul>
              <li>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-slack"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
              </li>
            </ul>
          </div>
          <img src="<?php echo get_field('logo_image') ?>" alt="" />
          <p>All rights reserved.</p>
        </div>
      </div>
    </section>
    <script>
    const headerNav = document.querySelector(".header__nav");
    const burgerBtn = document.querySelector(".toggle__menu");
    burgerBtn.addEventListener("click", () => {
    burgerBtn.classList.toggle("open");
    headerNav.classList.toggle("open");
    });

    const header = document.querySelector(".header");
    window.console.log(scrollY);
    window.addEventListener("scroll", () => {
    if (window.scrollY >= 100) {
        header.classList.add("dark");
    } else {
        header.classList.remove("dark");
    }
    });
</script>

  </body>
</html>