<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <script>
            var countM = new Number();
            var count = new Number();
            var countM = "10";
            var count = "00";
        </script>
    </head>
    <body onload="start();">
            <h4><span id="msg"></span><span id="tempo"></span>:<span id="tempo2"></span>!</h4>
            <script type="text/javascript">
            
            function start() {
              if ((countM - 1) >= -1) {
                if ((count - 1) >= 0) {
                  count = count - 1;
                  tempo.innerText = countM;
                  tempo2.innerText = count
                  msg.innerText = "Você tem: ";
                
                  if (count < 10) {
                    tempo2.innerText = '0' + count;
                  }
                
                  if (countM < 10) {
                    tempo.innerText = '0' + countM;
                  }
                
                }
              
                if (count == 0) {
                  countM = countM - 1;
                  count = 60;
                  document.location.reload();
                }
              
              } else {
                msg.innerText = ":( ";
                tempo2.innerText = ' !';
                tempo.innerText = "Tempo esgotado";
                document.location.reload();
              }
              setTimeout('start();', 1000);
            }
           </script>
    </body>
</html>
