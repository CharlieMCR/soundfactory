<footer>
            
        <p>Copyright &copy;<?php echo date('Y'); ?> Soundfactory</p>

        </footer>

        <nav id="primary_nav">

            <ul>

                <li class="about <?php if ($section == "about") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>about/">About</a></li>
                <li class="catalog <?php if ($section == "catalog") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>catalog/">Catalog</a></li>
                <li><a href="#" id="contact">Contact</a></li>
                <li><a href="#home" id="top">Top</a></li>
            </ul>

        </nav>

        <form  class="contact" method="post" action="#">
            <p id="cancel">x</p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php if (isset($email)) { echo htmlspecialchars($email); } ?>">
            <label for="message">Message</label>
            <textarea name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
            <div style="display: none;">
                <label for="address">Address</label>
                <input type="text" name="address" id="address">
                <p>Humans (and frogs): please leave this field blank.</p>
            </div>
            <button type="submit" id="send">Send</button>

        </form>
    </div>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery.min.js"></script>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56594057-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>