<footer>
            
        <p>Copyright &copy;<?php echo date('Y'); ?> Soundfactory</p>

        </footer>

        <nav id="primary_nav">

            <ul>

                <li class="about <?php if ($section == "about") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>about/">About</a></li>
                <li class="catalog <?php if ($section == "catalog") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>catalog/">Catalog</a></li>
                <li><a href="#" id="contact">Contact</a></li>
                <li><a href="">Top</a></li>
            </ul>

        </nav>

        <form  class="contact" method="post" action="#">

            <table>
                <tr>
                    <th>
                        <label for="name">Name</label>
                    </th>
                    <td>
                                <input type="text" name="name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="email">Email</label>
                    </th>
                    <td>
                        <input type="text" name="email" id="email" value="<?php if (isset($email)) { echo htmlspecialchars($email); } ?>">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="message">Message</label>
                    </th>
                    <td>
                        <textarea name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
                    </td>
                </tr> 
                <tr style="display: none;">
                    <th>
                        <label for="address">Address</label>
                    </th>
                    <td>
                        <input type="text" name="address" id="address">
                        <p>Humans (and frogs): please leave this field blank.</p>
                    </td>
                </tr>                   
            </table>
            <input id="submit"type="submit" value="Send">

        </form>
    </div>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery.js"></script>
</body>
</html>