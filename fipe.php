<?php
$app = "ng-app='app'";
$controller ="ng-controller='MyCtrl'";
include("header.php");
include("banner.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.js"></script>
<script>
    angular.module('app', []);
    angular.module('app').controller('MyCtrl', function MyCtrl($http, $scope){

        $http.get('https://fipe-parallelum.rhcloud.com/api/v1/carros/marcas').success(function(data) {
            $scope.greeting = data;
        });

        $scope.carregarModelo = function (marca) {
            $http.get("https://fipe-parallelum.rhcloud.com/api/v1/carros/marcas/"+marca.codigo+"/modelos").success(function (data) {
               $scope.modelo = data;
            });
        };

    });
</script>
<section class="section-2 section-white s-contact" id="pedido">
<div class="container">
    <div class="row">
       <h3 for="teste1" style="letter-spacing:0 !important ;">Marcas</h3>
        <select id="teste1" class="customSel contact-form__select" ng-options="x as x.nome for x in greeting" ng-model="marca" ng-change="carregarModelo(marca)">
            <option value="0" selected>Selecione a marca</option>
        </select>
    </div>
    <div class="row">
        <h3 for="teste2" style="letter-spacing:0 !important ;">Modelo</h3>
        <select id="teste2" class="customSel contact-form__select">
            <option value="0" selected>Selecione o modelo</option>
            <option ng-repeat="x in modelo.modelos" value="{{ x.nome }}">{{ x.nome }}</option>
        </select>
    </div>
</div>
</section>
<?php include('footer.php'); ?>