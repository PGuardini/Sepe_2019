<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <style>
            * {
            box-sizing: border-box;
            }

            body {
            background-color: #f1f1f1;
            }

            #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
            }

            h1 {
            text-align: center;  
            }

            input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
            }

            /* Mark input boxes that gets an error on validation: */
            input.invalid {
            background-color: #ffdddd;
            }

            /* Hide all steps by default: */
            .tab {
            display: none;
            }

            button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
            }

            button:hover {
            opacity: 0.8;
            }

            #prevBtn {
            background-color: #bbbbbb;
            }

            /* Make circles that indicate the steps of the form: */
            .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;  
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
            }

            .step.active {
            opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
            background-color: #4CAF50;
            }
            .desativado{
                display:none;
            }
        </style>
    </head>
    <body>

        <form id="regForm" action="functions.php" method='POST'>
            <h1>Register:</h1>

            <!-- PAGINA 1 -->

            <div class="tab">
                <p>
                    <label>
                        <h4>Curso:</h4>
                    </label>
                    <select class="form-control" name='curso' id='curso'>
                        <option value='agro'>Agropecuária</option>
                        <option value='info'>Informática</option>
                        <option value='quimi'>Química</option>
                    </select>
                </p>
                <p>
                    <label>
                        <h4>Ano:</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="ano" class="custom-control-input" value='1'>
                        <label class="custom-control-label" for="customRadio1">1°</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="ano" class="custom-control-input" value='2'>
                        <label class="custom-control-label" for="customRadio2">2°</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="ano" class="custom-control-input" value='3'>
                        <label class="custom-control-label" for="customRadio3">3°</label>
                    </div>
                    <div class="custom-control custom-radio desativado" id='quimi'>
                        <input type="radio" id="customRadio4" name="ano" class="custom-control-input" value='4'>
                        <label class="custom-control-label" for="customRadio4">4°</label>
                    </div>
                </p>

                <p>
                    <label>
                        <h4>Cor:</h4>
                    </label>
                    <select class="form-control" name='cor' id='cor'>
                        <option value='branco'>Branco</option>
                        <option value='pardo'>Pardo</option>
                        <option value='negro'>Negro</option>
                        <option value='amarelo'>Amarelo</option>
                        <option value='indigena'>Indígena</option>
                        <option value='outros'>Outros</option>
                    </select>
                </p>

                <p>
                    <label>
                        <h4>Idade:</h4>
                    </label>
                    <input name="idade" class='form-control' type='number' min='14' max='21'>
                </p>
                <p>
                    <label>
                        <h4>Sexo (biológico):</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="masculino" name="sexo" class="custom-control-input" value='masculino'>
                        <label class="custom-control-label" for="masculino">Masculino</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="feminino" name="sexo" class="custom-control-input" value='feminino'>
                        <label class="custom-control-label" for="feminino">Feminino</label>
                    </div>
                </p>
            </div>

            <!-- PAGINA 2 -->

            <div class="tab">Name:
                <p>
                    <label>
                        <h4>Orientação Sexual:</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="heterossexual" name="orientacao" class="custom-control-input" value='heterossexual'>
                        <label class="custom-control-label" for="heterossexual">Heterossexual</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="homossexual" name="orientacao" class="custom-control-input" value='homossexual'>
                        <label class="custom-control-label" for="homossexual">Homossexual</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="bissexual" name="orientacao" class="custom-control-input" value='bissexual'>
                        <label class="custom-control-label" for="bissexual">Bissexual</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="pansexual" name="orientacao" class="custom-control-input" value='pansexual'>
                        <label class="custom-control-label" for="pansexual">Pansexual</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="assexual" name="orientacao" class="custom-control-input" value='assexual'>
                        <label class="custom-control-label" for="assexual">Assexual</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="queer" name="orientacao" class="custom-control-input" value='queer'>
                        <label class="custom-control-label" for="queer">Queer</label>
                    </div>
                </p>
                <p>
                    <label>
                        <h4>Educação Fundamental (tipo de educação que teve):</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="publica" name="fundamental" class="custom-control-input" value='publica'>
                        <label class="custom-control-label" for="publica">Pública</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="privada" name="fundamental" class="custom-control-input" value='privada'>
                        <label class="custom-control-label" for="privada">Privada</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="mista" name="fundamental" class="custom-control-input" value='mista'>
                        <label class="custom-control-label" for="mista">Mista</label>
                    </div>
                </p>
                <p>
                    <label>
                        <h4>Religião:</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="crista" name="religiao" class="custom-control-input" value='crista'>
                        <label class="custom-control-label" for="crista">Cristã</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="espirita" name="religiao" class="custom-control-input" value='espirita'>
                        <label class="custom-control-label" for="espirita">Espírita</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="judaica" name="religiao" class="custom-control-input" value='judaica'>
                        <label class="custom-control-label" for="judaica">Judaica</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="islamica" name="religiao" class="custom-control-input" value='islamica'>
                        <label class="custom-control-label" for="islamica">Islâmica</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="africana" name="religiao" class="custom-control-input" value='africana'>
                        <label class="custom-control-label" for="africana">Africana</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="sem" name="religiao" class="custom-control-input" value='sem'>
                        <label class="custom-control-label" for="sem">Não possui</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="outra" name="religiao" class="custom-control-input" value='outra'>
                        <label class="custom-control-label" for="outra">Outra</label>
                    </div>
                </p>
                <p>
                    <label>
                        <h4>Exerce atividade remunerada?</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="sim" name="trabalho" class="custom-control-input" value='sim'>
                        <label class="custom-control-label" for="sim">Sim</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nao" name="trabalho" class="custom-control-input" value='nao'>
                        <label class="custom-control-label" for="nao">Não</label>
                    </div>
                </p>
                <p>
                    <label>
                        <h4>Por que escolheu o IF?</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="vestibular" name="escolhaIF" class="custom-control-input" value='vestibular'>
                        <label class="custom-control-label" for="vestibular">Preparação para o vestibular</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="qualidade" name="escolhaIF" class="custom-control-input" value='qualidade'>
                        <label class="custom-control-label" for="qualidade">Qualidade de ensino</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="trabalho" name="escolhaIF" class="custom-control-input" value='trabalho'>
                        <label class="custom-control-label" for="trabalho">Para ingressar no mercado de trabalho</label>
                    </div>
                </p>
            </div>

            <!-- PAGINA 3-->

            <div class="tab">Name:
                <p>
                    <label>
                        <h4>Quanto você consome de serviços de streaming (1-5):</h4>
                        <h6 style='float:left;width:20%;text-align:center;'>1 (muito pouco)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>2 (pouco)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>3 (razoavel)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>4 (muito)</h6>
                        <h6 style='float:right;width:20%;text-align:center;'>5 (em excesso)</h6>
                    </label>
                    
                    <input type="range" class="custom-range" min="1" max="5" name='streaming'>
                </p>
                <p>
                    <label>
                        <h4>Seu posicionamento político (1-5)</h4>
                        <h6 style='float:left;width:20%;text-align:center;'>1 (extrema esquerda)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>2 (esquerda)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>3 (centro)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>4 (direita)</h6>
                        <h6 style='float:right;width:20%;text-align:center;'>5 (extrema direita)</h6>
                    </label>
                    
                    <input type="range" class="custom-range" min="1" max="5" name='politica'>
                </p>
                <p>
                    <label>
                        <h4>Seus pais são divorciados? Se sim, mora com quem?</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="mae" name="divorcio" class="custom-control-input" value='mae'>
                        <label class="custom-control-label" for="mae">Com minha mãe</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="pai" name="divorcio" class="custom-control-input" value='pai'>
                        <label class="custom-control-label" for="pai">Com meu Pai</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="casados" name="divorcio" class="custom-control-input" value='casados'>
                        <label class="custom-control-label" for="casados">São casados</label>
                    </div>
                </p>
                <p>
                    <label>
                        <h4>Qual cidade você mora?</h4>
                    </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="joinville" name="moradia" class="custom-control-input" value='joinville'>
                        <label class="custom-control-label" for="joinville">Joinville</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="araquari" name="moradia" class="custom-control-input" value='araquari'>
                        <label class="custom-control-label" for="araquari">Araquari</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="sfs" name="moradia" class="custom-control-input" value='sfs'>
                        <label class="custom-control-label" for="sfs">São Francisco do Sul</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="barraSul" name="moradia" class="custom-control-input" value='barraSul'>
                        <label class="custom-control-label" for="barraSul">Barra do Sul</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="outra" name="moradia" class="custom-control-input" value='outra'>
                        <label class="custom-control-label" for="outra">Outra</label>
                    </div>
                </p>
                <p>
                    <label>
                        <h4>Seu estado de espírito</h4>
                        <h6 style='float:left;width:20%;text-align:center;'>1 (muito mau)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>2 (mau)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>3 (normal)</h6>
                        <h6 style='float:left;width:20%;text-align:center;'>4 (bom)</h6>
                        <h6 style='float:right;width:20%;text-align:center;'>5 (muito bom)</h6>
                    </label>
                    
                    <input type="range" class="custom-range" min="1" max="5" name='estadoEspirito'>
                </p>
            </div>

            <!-- PAGINA 4-->

            <div class="tab">Name:
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
            </div>
            
            <!-- PAGINA 5 -->

            <div class="tab">Name:
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
            </div>

            <!-- PAGINA 6 -->

            <div class="tab">Name:
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
            </div>

            <!-- BARRA INFERIOR DE NAVEGAÇÂO -->

            <div style="overflow:auto;">
                <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Próxima</button>
                <button type="submit" id="submitBtn" style='display:none;'>Enviar</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
        
        <script>
            $(document).ready(function(){
                $("#curso").change(function(){
                    var selecionado = $("select option:selected").val();
                    if (selecionado=="quimi") {       
                        $("#quimi").removeClass("desativado");
                    }else{
                        $("#quimi").addClass("desativado");
                   }
                })
            })
        </script>
        
        <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab

            function showTab(n) {
                // This function will display the specified tab of the form...
                var x = document.getElementsByClassName("tab");
                x[n].style.display = "block";
                //... and fix the Previous/Next buttons:
                if (n == 0) {
                    document.getElementById("prevBtn").style.display = "none";
                } else {
                    document.getElementById("prevBtn").style.display = "inline";
                }
                if (n == (x.length - 1)) {
                    document.getElementById("nextBtn").style.display = "none";
                    document.getElementById("submitBtn").style.display = "inline";
                } else {
                    document.getElementById("nextBtn").innerHTML = "Próxima";
                }
                if (n != (x.length - 1)) {
                    document.getElementById("submitBtn").style.display = "none";
                    document.getElementById("nextBtn").style.display = "inline";
                }
                //... and run a function that will display the correct step indicator:
                fixStepIndicator(n)
            }

            function nextPrev(n) {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("tab");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && !validateForm()) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                // if you have reached the end of the form...
                if (currentTab >= x.length) {
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    return false;
                }
                // Otherwise, display the correct tab:
                showTab(currentTab);
            }

            function validateForm() {
                // This function deals with validation of the form fields
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("input");
                // A loop that checks every input field in the current tab:
                for (i = 0; i < y.length; i++) {
                    // If a field is empty...
                    if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                    }
                }
                // If the valid status is true, mark the step as finished and valid:
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid; // return the valid status
            }

            function fixStepIndicator(n) {
                // This function removes the "active" class of all steps...
                var i, x = document.getElementsByClassName("step");
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
                //... and adds the "active" class on the current step:
                x[n].className += " active";
            }
        </script>

    </body>
</html>