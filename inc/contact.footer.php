<footer>
  <div id="contact">
    <h2>Contact Me</h2>
    <form>
      <label for="username">Name:</label><br />
      <input id="username" type="text" required /><br />
      <label for="email">Email:</label><br />
      <input id="email" type="email" required /><br />
      <label for="message">Your Message:</label><br />
      <textarea
        id="message"
        name="message"
        maxlength="500"
        rows="3"
        required></textarea><br />
      <input id="submit" type="submit" value="Send" />
    </form>
    <h3>Or send me email to:</h3>
    <p>perkiokati@outlook.com</p>
  </div>
  <p id="copyright">
    &copy;
    <script>
      document.write(new Date().getFullYear());
    </script>
    Kati Perkiö
  </p>
</footer>
<?php
?>