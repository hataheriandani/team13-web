</div>
  </div>
<footer>
          <div class="footer-box">
          
            
            <div>
              <P>&copy; TEAM-13 - HAMK 2023<br>
                 Vankanlähde 9, 13100 Hämeenlinna.</P>
            </div>
            
            <div>
              <P>Email: bon.appétit@gmail.fi</P>
              <p>
             Last modified: 
            <?php
            $file = basename($_SERVER['SCRIPT_FILENAME']);
            $lastModified = date("F d Y H:i:s.", filemtime($file));
            echo  $lastModified;
            ?>
            </p>
            </div>

            <div>
          <P>Tel: <a href="tel:+358101010101">+358 1010 10101</a></p>
            </div>
           
          
          </div>
          
          
      </footer>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</div>
<style>
.footer-box{
    display: flex;
    background-color: #ffde00;
    justify-content: space-between;
    color: #222629;
    align-items: center;
    justify-content: space-around;
    font-size: x-large;

}
</style>
</body>
</html>