<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/6/16
 * Time: 4:59 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    img{
        height: 300px ;
    }
    .card{
        cursor: pointer;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col s6">
            <a href="#">
                <div class="card">
                    <div class="card-image">
                        <img src="<?=base_url()?>assets/images/cadastro/image.png" alt="">
                    </div>
                    <div class="card-title">
                        <center><span>Cliente</span></center>
                    </div>
                </div>
            </a>
        </div>
        <div class="col s6">
            <a href="">
            <div class="card">
                <div class="card-image">
                    <img src="<?=base_url()?>assets/images/cadastro/image.png" alt="">
                </div>
                <div class="card-title">
                    <center><span>Integrador</span></center>
                </div>
            </div>
            </a>
        </div>
    </div>

</div>
