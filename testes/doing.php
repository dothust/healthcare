            <!-- CARD ESCALA DE BRADEN -->

            <div class="card card-register mx-auto mt-5">
                <div class="card-header"><b>Escala de Braden</b></div>

                <img src="images/braden_scale.png" usemap="#map" class="img-fluid">
                <map name="map">
                    <area state="A1" alt="A1" title="A1" href="#x1" coords="466,183,252,119" shape="rect">
                    <area state="B1" alt="B1" title="B1" href="#x1" coords="467,258,250,195" shape="rect">
                    <area state="C1" alt="C1" title="C1" href="#x1" coords="255,267,462,327" shape="rect">
                    <area state="D1" alt="D1" title="D1" href="#x1" coords="253,343,469,400" shape="rect">
                    <area state="E1" alt="E1" title="E1" href="#x1" coords="254,415,466,469" shape="rect">
                    <area state="F1" alt="F1" title="F1" href="#x1" coords="255,481,463,549" shape="rect">
                    <area state="A2" alt="A2" title="A2" href="#x1" coords="480,119,682,183" shape="rect">
                    <area state="B2" alt="B2" title="B2" href="#x1" coords="480,194,682,257" shape="rect">
                    <area state="C2" alt="C2" title="C2" href="#x1" coords="480,267,680,331" shape="rect">
                    <area state="D2" alt="D2" title="D2" href="#x1" coords="480,344,682,404" shape="rect">
                    <area state="E2" alt="E2" title="E2" href="#x1" coords="481,415,680,471" shape="rect">
                    <area state="F2" alt="F2" title="F2" href="#x1" coords="481,482,682,552" shape="rect">
                    <area state="A3" alt="A3" title="A3" href="#x1" coords="693,119,897,183" shape="rect">
                    <area state="B3" alt="B3" title="B3" href="#x1" coords="693,195,896,255" shape="rect">
                    <area state="C3" alt="C3" title="C3" href="#x1" coords="692,268,896,337" shape="rect">
                    <area state="D3" alt="D3" title="D3" href="#x1" coords="693,347,896,403" shape="rect">
                    <area state="E3" alt="E3" title="E3" href="#x1" coords="694,414,897,470" shape="rect">
                    <area state="F3" alt="F3" title="F3" href="#x1" coords="693,484,896,550" shape="rect">
                    <area state="A4" alt="A4" title="A4" href="#x1" coords="909,117,1104,180" shape="rect">
                    <area state="B4" alt="B4" title="B4" href="#x1" coords="907,197,1102,252" shape="rect">
                    <area state="C4" alt="C4" title="C4" href="#x1" coords="910,268,1101,336" shape="rect">
                    <area state="D4" alt="D4" title="D4" href="#x1" coords="911,349,1105,406" shape="rect">
                    <area state="E4" alt="E4" title="E4" href="#x1" coords="911,415,1105,475" shape="rect">
                    <area state="F4" alt="F4" title="F4" href="#x1" coords="912,484,1105,552" shape="rect">
                </map>

            </div>
 



    <!-- <label for="validationTextarea">Avaliação da Lesão</label>
              <textarea class="form-control" id="validationTextarea" rows="5" placeholder="Tipo de lesão, localização, estágio, tamanho, leito, exsudato-quantidade, aspecto e odor, bordas e sinais de infecção..." required></textarea>
              <br>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Selecionar Imagem</label>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="col-sm-12 text-center" >
              <input type="submit" name="x2" value="Enviar" class="btn btn-primary btn-lg">
            </div> -->

  </div>

  <!-- CARD IMAGENS -->

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><b>Imagens</b></div>
      <div class="card-body">
        <h1>imagens</h1>
      </div>
    </div>
  </div>

  <!-- CARD DETALHES DA LESÃO -->

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><b>Lesão</b></div>
      <div class="card-body">
        <div class="form-group row">
          <div class="col-4">
            <div class="form-group-check">
              <h6><label class="form-check-label">
                  &nbsp&nbsp&nbsp&nbsp<input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck1">Lesão por pressão
                </label></h6>
            </div>
          </div>
          <div class="col">
            <input type="text" name="pacPront" id="pacPront" class="form-control" placeholder="Outra" required>
          </div>
        </div>

        <hr />

        <div class="form-group row">
          <label class="col-4">
            <h6>Classificação da lesão:</h6>
          </label>
          <div class="col-8">
            <select class="custom-select" required>
              <option value="">Estágio</option>
              <option value="1">Estágio I</option>
              <option value="2">Estágio II</option>
              <option value="3">Estágio III</option>
              <option value="4">Estágio IV</option>
              <option value="5">Não estadiável</option>
              <option value="6">Lesão tissular profunda</option>
              <option value="7">Relacionada a dispositivo médico</option>
              <option value="8">Em membranas mucosas</option>
            </select>
          </div>
        </div>

        <hr />

        <div class="form-group row">
          <div class="col-2">
            <label class="form-check-label">
              <h6>Tamanho:</h6>
            </label>
          </div>
          <div class="col-3">
            <input type="text" name="pacPront" id="pacPront" class="form-control" placeholder="cm Vertical" required>
          </div>
          <div class="col-3">
            <input type="text" name="pacPront" id="pacPront" class="form-control" placeholder="cm Horizontal" required>
          </div>
          <div class="col-4">
            <input type="text" name="pacPront" id="pacPront" class="form-control" placeholder="Área total" required>
          </div>
        </div>

        <hr />

        <div class="form-group row">
          <label class="col-sm-3">
            <h6>Profundidade:</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="profun_radio">Sem Profundidade
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="profun_radio">Moderada
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="profun_radio">Profunda
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="profun_radio">Solapamento (túnel/cavidade)
              </label>
            </div>
          </div>
        </div>

        <hr />

        <div class="form-group row">
          <label class="col-sm-3">
            <h6>Dor:</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="dor_radio">Ausência
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="dor_radio">Leve
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="dor_radio">Moderada
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="dor_radio">Intensa
              </label>
            </div>
          </div>
        </div>

        <hr />

        <div class="form-group row">
          <label class="col-sm-2">
            <h6>Bordas:</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check1">Regular
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check2">Irregular
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check3">Aderida
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check4">Ressecada
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check5">Indistinta
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-2">
          </div>
          <div class="col-2">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check6">Deslocada
              </label>
            </div>
          </div>
          <div class="col-2">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check7">Macerada
              </label>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check8">Epíbole(enrolada)
              </label>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="bordas_check9">Fibrótica(cicatriz)
              </label>
            </div>
          </div>
        </div>



        <hr />



        <div class="form-group row">
          <label class="col-sm-4">
            <h6>Tecido leito da ferida:</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Eritema
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Flictema
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Esfacelo/Fibrina
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-1"></label>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Necrose coagulativa
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Necrose liquefação
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Injúria tissular
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Escara
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-1"></label>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Granulação
              </label>
            </div>
          </div>
          <div class="col-5">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Epitelização/Ilhas Epitelização
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Cicatrizado
              </label>
            </div>
          </div>
        </div>



        <hr />



        <div class="form-group row">
          <label class="col-sm-4">
            <h6>Tecido adjacente Periferida:</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Íntegro
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Eritema
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Palidez
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Cianose
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Úmido
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Macerado
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Ressecado
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Hiperqueratinoso
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Descamação
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Intumecido
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Dermatite
              </label>
            </div>
          </div>
        </div>



        <hr />



        <div class="form-group row">
          <label class="col-4">
            <h6>Exudato Quantidade:</h6>
          </label>
          <div class="col-8">
            <select class="custom-select" required>
              <option value="1">Ausência</option>
              <option value="2">Pouco</option>
              <option value="3">Moderado</option>
              <option value="4">Grande Quantidade</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-4">
            <h6>Exudato Característica:</h6>
          </label>
          <div class="col-8">
            <select class="custom-select" required>
              <option value="1">Sanguinolento</option>
              <option value="2">Seroso</option>
              <option value="3">Serosanguinolento</option>
              <option value="4">Purulento</option>
              <option value="5">Seropurulento</option>
            </select>
          </div>
        </div>



        <hr />



        <div class="form-group row">
          <label class="col-4">
            <h6>Odor:</h6>
          </label>
          <div class="col-8">
            <select class="custom-select" required>
              <option value="1">Ausência</option>
              <option value="2">Fétido Adocicado</option>
              <option value="3">Fétido "amônia"</option>
              <option value="4">Discreto</option>
              <option value="5">Acentuado</option>
              <option value="6">Indefinido</option>
            </select>
          </div>
        </div>



        <hr />



      </div>
    </div>
  </div>






  <!-- CARD PRESCRIÇÃO DA ENFERMAGEM -->

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><b>Prescrição da Enfermagem</b></div>
      <div class="card-body">



        <div class="form-group form-row">
          <legend class="col-form-label col-3 pt-0">Estava com cobertura prescrita</legend>
          <div class="col-2">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                Sim
              </label>&nbsp&nbsp&nbsp
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                Não
              </label>
            </div>
          </div>
          <div class="col-7">
            <textarea class="form-control" id="validationTextarea" placeholder="Observação..." required></textarea>
          </div>
        </div>


        <hr />


        <div class="form-group row">
          <label class="col-3">
            <h6>Curativo:</h6>
          </label>
          <div class="col-9">
            <select class="custom-select" required>
              <option value=""></option>
              <option value="1">Oclusivo</option>
              <option value="2">Aberto</option>
              <option value="3">Compressivo</option>
            </select>
          </div>
        </div>


        <hr />


        <div class="form-group row">
          <label class="col-sm-4">
            <h6>Cobertura leito da ferida:</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x1">SF0,9%/ água destilada
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x2">PHMB gel
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x3">PHMB líquido
              </label>
            </div>
          </div>
        </div>



        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x4">Filme transparente
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x5">Pomada Antibiótica
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x6">Papaína
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x7">Sulfadiazina de Prata
              </label>
            </div>
          </div>
        </div>



        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x8">AGE
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x9">Gaze/Tela antiaderente (petrolatum)
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x10">Hidrogel
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x11">Hidrocolóide
              </label>
            </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x12">Creme de uréia
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x13">Hidrofibra
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x14">Hidrofibra com prata
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x15">Alginato
              </label>
            </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x16">Silicone
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x17">Creme barreira
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x18">Bota de Unna
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x19">Alginato com prata
              </label>
            </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x20">Colagenase
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x21">Espuma / Hidropolimero
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x22">Espuma com prata
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x23">Espuma com Anti-inflamatório
              </label>
            </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x24">Antisséptico
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x25">Carvão ativado
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x26">Cobertura secundária compressa
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x27">Cobertura secundária atadura
              </label>
            </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-1"></label>
          <br><br>
          <div class="col-3">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x28">Polytube
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="x29">VAC
              </label>
            </div>
          </div>
        </div>


        <hr>


        <div class="form-group row">
          <label class="col-sm-4">
            <h6>Cobertura Periferida</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">SF0,9%/ água destilada
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">PHMB gel
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">PHMB líquido
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4">
            <h6>&nbsp</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Creme barreira
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Pomada antibiótica
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Pomada corticóide
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4">
            <h6>&nbsp</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">AGE
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Gaze / Tela Antiaderente
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Creme de uréia
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4">
            <h6>&nbsp</h6>
          </label>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Silicone
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-group-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Filme Transparente
              </label>
            </div>
          </div>
          <div class="col">
          </div>
        </div>


        <hr>



        <div class="form-group row">
          <label class="col-3">
            <h6>Desbridamento</h6>
          </label>
          <div class="col-9">
            <select class="custom-select" required>
              <option value=""></option>
              <option value="1">Não necessário</option>
              <option value="2">Mecânico (gaze)</option>
              <option value="3">Autolítico / Enzimático</option>
              <option value="4">Cirúrgico Conservador (enfermeiro)</option>
              <option value="5">Cirúrgico (médico cirurgião) – Solicitar parecer</option>
            </select>
          </div>
        </div>


        <hr>



        <div class="form-group row">
          <label class="col-3">
            <h6>Data e hora</h6>
          </label>
          <div class="col-3">
            <select class="custom-select" required>
              <option value=""></option>
              <option value="1">12h</option>
              <option value="2">24h</option>
              <option value="3">48h</option>
              <option value="4">72h</option>
            </select>
          </div>
          <div class="col">
            <input type="text" name="x" id="x" class="form-control" placeholder="Outro..." required>
          </div>
        </div>



        <hr>



      </div>
    </div>
  </div>



  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><b>Prescrição da Enfermagem</b></div>
      <div class="card-body">



        <hr>



      </div>
    </div>
  </div>


  </form>


  <!-- SCRIPTS -->

  <script>
    $(document).ready(function(e) {
      $('img[usemap]').rwdImageMaps();
      //$('area').on('click', function() {
      //alert($(this).attr('alt') + 'clicked');
      //});
    });
  </script>
  <!-- <script>
    
    var basic_opts = {
    mapKey: 'title'
    };

    var initial_opts = $.extend({},basic_opts, 
    { 
        staticState: true,
        fill: false,
        stroke: true,
        strokeWidth: 2,
        strokeColor: 'ff0000'
    });

    $('img').mapster(initial_opts)
    .mapster('set',true,'CA', {
        fill: true,
        fillColor: '00ff00'
    })
    .mapster('snapshot')
    .mapster('rebind',basic_opts);

  </script> -->


