<?php

    if(!isset($_SESSION['produtos'])) {
        $produto1 = new Produtos;
        $produto1->IdProduto = 0;
        $produto1->NomeProduto = "Coca-Cola Lata";
        $produto1->ValorProduto = 8.00;
        $produto1->ValorDesconto = 5.00;
        $produto1->CaminhoImagem = "https://riomarrecife.com.br/recife/2019/07/refrigerante_coca_cola_350ml.png";
        
        $produto2 = new Produtos;
        $produto2->IdProduto = 1;
        $produto2->NomeProduto = "Sabonete Dove";
        $produto2->ValorProduto = 2.20;
        $produto2->ValorDesconto = 1.50;
        $produto2->CaminhoImagem = "https://cf.shopee.com.br/file/736165e4706e338823ad6c55e87a24e0";
        
        $produto3 = new Produtos;
        $produto3->IdProduto = 2;
        $produto3->NomeProduto = "Sabão em Pó";
        $produto3->ValorProduto = 15.00;
        $produto3->ValorDesconto = 13.00;
        $produto3->CaminhoImagem = "https://cf.shopee.com.br/file/1949c959a93ab81965a63c5757fba96d";
        
        $produto4 = new Produtos;
        $produto4->IdProduto = 3;
        $produto4->NomeProduto = "Arroz Sepé";
        $produto4->ValorProduto = 8.80;
        $produto4->ValorDesconto = 7.80;
        $produto4->CaminhoImagem = "https://ibassets.com.br/ib.item.image.big/b-20454af156354903b15bf5c71b3ea6da.jpeg";
        
        $produto5 = new Produtos;
        $produto5->IdProduto = 4;
        $produto5->NomeProduto = "Pizza Pif Paf";
        $produto5->ValorProduto = 10.90;
        $produto5->ValorDesconto = 10.00;
        $produto5->CaminhoImagem = "https://araujo.vteximg.com.br/arquivos/ids/3976417-1000-1000/07896581351142.jpg?v=637408812183070000";
        
        $produto6 = new Produtos;
        $produto6->IdProduto = 5;
        $produto6->NomeProduto = "Tempero Knorr";
        $produto6->ValorProduto = 4.00;
        $produto6->ValorDesconto = 3.50;
        $produto6->CaminhoImagem = "https://www.bernardaoemcasa.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/c/a/caldo_knorr_57g_carne.jpg";

        $_SESSION['produtos'][]=$produto1;
        $_SESSION['produtos'][]=$produto2;
        $_SESSION['produtos'][]=$produto3;
        $_SESSION['produtos'][]=$produto4;
        $_SESSION['produtos'][]=$produto5;
        $_SESSION['produtos'][]=$produto6;

    }
?>