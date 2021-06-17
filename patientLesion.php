<?php
if (!isset($_SESSION)) {
    session_start();
}
include("php/sessionVerifier.php");

$lesion = "";
if (isset($_GET['lesion']) && !empty($_GET['lesion'])) {
    $lesion = addslashes($_GET['lesion']);
}
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php?page=">Home</a>
    </li>
    <li class="breadcrumb-item active">Inserir Paciente</li>
</ol>

<!-- CARD IDENTIFICAÇÃO DO PACIENTE -->

<form method="POST" action="php/formInsertion.php">

    <div class="col-3 border border-secondary rounded">

        <!-- CARD DETALHES DA LESÃO -->
        <div class="card-header"><b>Avaliação da Lesão</b></div>

        <img src="images/human_body.jpg" class="img-fluid" alt="Corpo Humano" usemap="#image-map">
        <map name="image-map">
            <!-- XXX_ParteDoCorpo sendo, M=Man, B=Back, R=Right -->

            <!-- man -->

            <!-- back -->
            <!-- right -->
            <area data-key="MBR_braco" alt="MBR_braco" title="MBR_braco" href="index.php?page=patientLesion&lesion=MBR_braco" coords="103,65,113,68,120,86,117,104,120,137,106,137,101,112,104,87" shape="poly">
            <area alt="MBR_costas" title="MBR_costas" href="index.php?page=patientLesion&lesion=MBR_costas" coords="70,55,83,55,94,62,102,65,103,89,99,113,95,126,96,147,98,164,71,164" shape="poly">
            <area alt="MBR_nadega" title="MBR_nadega" href="index.php?page=patientLesion&lesion=MBR_" coords="71,165,98,165,100,173,101,189,86,192,71,190,71,177" shape="poly">
            <area alt="MBR_coxa" title="MBR_coxa" href="index.php?page=patientLesion&lesion=MBR_" coords="71,191,86,193,99,191,98,218,88,256,89,262,71,263" shape="poly">
            <area alt="MBR_perna" title="MBR_perna" href="index.php?page=patientLesion&lesion=MBR_" coords="71,264,89,263,92,286,88,306,81,333,71,333,74,314,72,296,70,288,74,274" shape="poly">
            <area alt="MBR_pe" title="MBR_pe" href="index.php?page=patientLesion&lesion=MBR_" coords="71,334,82,334,91,346,71,346" shape="poly">
            <area alt="MBR_mao" title="MBR_mao" href="index.php?page=patientLesion&lesion=MBR_" coords="109,182,118,185,120,203,116,211,104,213,104,206,101,197" shape="poly">
            <area alt="MBR_cabeca" title="MBR_cabeca" href="index.php?page=patientLesion&lesion=MBR_" coords="70,54,81,54,81,49,83,42,87,36,88,27,87,18,79,8,70,8" shape="poly">
            <!-- left -->
            <area alt="MBL_cabeca" title="MBL_cabeca" href="index.php?page=patientLesion&lesion=MBR_" coords="69,8,62,8,54,17,53,27,53,36,57,41,58,54,69,54" shape="poly">
            <area alt="MBL_costas" title="MBL_costas" href="index.php?page=patientLesion&lesion=MBR_" coords="58,55,69,55,70,164,43,164,42,152,46,145,46,127,39,112,39,101,35,90,36,66,47,63" shape="poly">
            <area alt="MBL_braco" title="MBL_braco" href="index.php?page=patientLesion&lesion=MBR_" coords="35,66,27,69,20,87,22,105,23,130,19,136,35,137,39,125,38,113,38,101,34,91" shape="poly">
            <area alt="MBL_antebraco" title="MBL_antebraco" href="index.php?page=patientLesion&lesion=MBR_" coords="18,137,35,138,38,151,31,184,21,187,21,164" shape="poly">
            <area alt="MBL_mao" title="MBL_mao" href="index.php?page=patientLesion&lesion=MBR_" coords="32,184,21,187,20,204,26,211,36,213,40,195" shape="poly">
            <area alt="MBL_nadega" title="MBL_nadega" href="index.php?page=patientLesion&lesion=MBR_" coords="70,164,70,191,56,192,40,188,40,173,42,164" shape="poly">
            <area alt="MBL_coxa" title="MBL_coxa" href="index.php?page=patientLesion&lesion=MBR_" coords="69,192,69,263,51,263,50,245,45,229,42,215,40,189" shape="poly">
            <area alt="MBL_perna" title="MBL_perna" href="index.php?page=patientLesion&lesion=MBR_" coords="69,264,67,273,69,289,67,306,69,333,59,333,52,310,48,289,50,264" shape="poly">
            <area alt="MBL_pe" title="MBL_pe" href="index.php?page=patientLesion&lesion=MBR_" coords="58,334,68,334,69,346,49,346" shape="poly">
            <area alt="MBR_antebraco" title="MBR_antebraco" href="index.php?page=patientLesion&lesion=MBR_" coords="105,138,121,137,123,145,120,157,120,186,109,182,103,159" shape="poly">

            <!-- front -->
            <!-- right -->
            <area alt="MFR_cabeca" title="MFR_cabeca" href="" coords="188,7,189,59,208,60,200,56,205,38,207,27,205,16,197,8" shape="poly">
            <area alt="MFR_peito" title="MFR_peito" href="" coords="191,165,189,60,208,60,214,64,222,65,222,80,224,87,219,100,220,111,213,126,213,145,217,152,217,165" shape="poly">
            <area alt="MFR_braco" title="MFR_braco" href="" coords="222,64,231,69,238,84,236,103,237,117,237,130,223,134,220,114,220,101,225,89,222,80" shape="poly">
            <area alt="MFR_antebraco" title="MFR_antebraco" href="" coords="223,134,236,130,241,140,238,161,240,182,237,188,229,184,220,154" shape="poly">
            <area alt="MFR_mao" title="MFR_mao" href="" coords="228,184,237,189,240,201,235,211,222,213,222,202,219,196" shape="poly">
            <area alt="MFR_coxa" title="MFR_coxa" href="" coords="202,166,195,176,195,184,189,189,189,262,207,262,209,246,218,214,218,196,219,171,216,164" shape="poly">
            <area alt="MFR_perna" title="MFR_perna" href="" coords="189,262,207,262,211,282,209,297,204,318,200,335,190,333,192,313,189,292,192,277" shape="poly">
            <area alt="MFR_pe" title="MFR_pe" href="" coords="190,333,201,335,210,346,189,346" shape="poly">
            <!-- left -->
            <area alt="MFL_cabeca" title="MFL_cabeca" href="" coords="187,7,180,7,171,16,172,27,171,33,176,40,177,54,168,59,188,59" shape="poly">
            <area alt="MFL_peito" title="MFL_peito" href="" coords="188,59,190,164,161,164,160,152,164,146,165,127,158,110,157,99,154,90,155,79,155,66,164,64,168,60" shape="poly">
            <area alt="MFL_braco" title="MFL_braco" href="" coords="154,65,146,69,138,86,142,103,141,134,154,135,156,124,157,111,157,99,153,91,154,81" shape="poly">
            <area alt="MFL_antebraco" title="MFL_antebraco" href="" coords="139,134,137,145,139,160,139,171,139,188,149,183,153,170,158,153,154,136" shape="poly">
            <area alt="MFL_mao" title="MFL_mao" href="" coords="149,183,156,192,157,198,154,204,156,210,152,214,143,210,138,203,139,188" shape="poly">
            <area alt="MFL_coxa" title="MFL_coxa" href="" coords="175,164,175,169,181,173,182,183,187,189,188,262,171,260,169,246,161,220,158,173,160,164" shape="poly">
            <area alt="MFL_perna" title="MFL_perna" href="" coords="170,260,188,263,185,275,187,283,187,291,186,302,185,316,187,332,177,332,172,313,168,295,166,281" shape="poly">
            <area alt="MFL_pe" title="MFL_pe" href="" coords="178,332,187,332,187,345,168,346" shape="poly">
            <area alt="M_pubis" title="M_pubis" href="" coords="175,164,201,166,195,175,195,183,189,189,182,183,182,173,177,169" shape="poly">
        </map>
    </div>

</form>

<!-- <script>
    $(document).ready(function(e) {
        $('img[usemap]').rwdImageMaps();
        //$('area').on('click', function() {
        //alert($(this).attr('alt') + 'clicked');
        //});
    });
</script> -->
<script>
    $('human_body.jpg').mapster({
        fillOpacity: 0.5,
        render_highlight: {
            fillColor: '2aff00',
            stroke: true,
        },
        render_select: {
            fillColor: 'ff000c',
            stroke: false,
        },
        fadeInterval: 50,
        mapKey: 'data-key',
        areas: [{
                key: 'MBR_braco',
                selected: true
            },
            {
                key: 'ME',
                selected: true
            },
            {
                key: 'WA',
                staticState: false
            },
            {
                key: 'OR',
                isSelectable: false
            }
        ]
    });
</script>
<!-- ImageMapster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/imagemapster/1.5.4/jquery.imagemapster.min.js" integrity="sha512-RsXNh99DGEzAhsjz5toI7hsVEYqGtDLCd0oC8BYAFTPAYT7bv47uqKIPU4bn8PWV+dbYI1TXz4bpUghS85p7Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imagemapster/1.5.4/jquery.imagemapster.js" integrity="sha512-cpMx2tMC8g9QilwXFVFqVT5TWkvfq/xEaOspfF1FUUUJy5mL6As50+uh3yOoVlu1bKwsJrUthuEzC1m6WquRKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>