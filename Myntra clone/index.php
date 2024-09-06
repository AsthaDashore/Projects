<?php
$insert = false;
if (isset($_POST['email'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("connection to this database failed due to " . mysqli_connect_errno());
    }
//    echo "Success Connecting to database";
$email = $_POST['email'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw_repeat']??'default value';
$sql = "INSERT INTO `test`.`myntra` (`email`, `psw`, `psw_repeat`) VALUES ('$email', '$psw', '$psw_repeat');";
//echo $sql;

if($con->query($sql) == true){
   // echo "successfully inserted";
   $insert = true;
   // flag for successful insertion
}
else{
    echo "ERROR:  $sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" type="image/png" href="data:image/png;base64,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"
      sizes="64x64"/>
 <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle - Myntra</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="utils.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <header class="containerHeader">
    <nav class="flex space-between">
      <div class="left flex items-center ">
  <img src="https://aartisto.com/wp-content/uploads/2020/11/myntra.png" alt=""/>
        <ul class="flex items-center justify-center uppercase">
          <div class="dropdown">
          <li class="dropbtn">Men</li>
  <div class="dropdown-content">
  <a href="https://www.myntra.com/men-topwear">Top wear</a>
  <a href="https://www.myntra.com/men-footwear">Footwear</a>
  <a href="https://www.myntra.com/men-accessories">Fashion Acessories</a>
</div>
  </div>
  <div class="dropdown">
    <li class="dropbtn">Women</li>
<div class="dropdown-content">
<a href="#">Link 4</a>
<a href="#">Link 5</a>
<a href="#">Link 6</a>
</div>
</div>
<div class="dropdown">
  <li class="dropbtn">Kids</li>
<div class="dropdown-content">
<a href="#">Link 1</a>
<a href="#">Link 2</a>
<a href="#">Link 3</a>
</div>
</div>
<div class="dropdown">
  <li class="dropbtn">Home & Living</li>
<div class="dropdown-content">
<a href="#">Link 1</a>
<a href="#">Link 2</a>
<a href="#">Link 3</a>
</div>
</div>
<div class="dropdown">
  <li class="dropbtn">Beauty</li>
<div class="dropdown-content">
<a href="#">Link 1</a>
<a href="#">Link 2</a>
<a href="#">Link 3</a>
</div>
</div>
<li>Studio</li>
<input class="search" placeholder="Search for products, brands and more" class="desktop-searchBar" value="" data-reactid="904">
<div class="dropdown">
  <li class="dropbtn">Profile</li>
<div class="dropdown-content">
<a href="#">Orders</a>
<a href="#">Wishlist</a>
<a href="#">Gift cards</a>
<a href="#">Contact us</a>
<a href="signup.html">Signup</a>
<a href="Login_page.html">Login</a>
</div>
</div>
        <li class="wishlist">WishList</li>
        <li class="bag">Bag</li>
        </ul>
        
      </div>
      <div class="right flex items-center">
        
          </div>
      </div>
    </nav>
  </header>
  <section class="container section1">
   <img class="homeImg" src="home.png"alt=""/>
    <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/13/e34b394c-36b1-4774-8639-5aeb2c5716121652442642122-DK-TSHIRT-67--1-.gif"  alt=""/>
    <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/7/1e599d37-1ed6-4e39-9057-ffb4065173b51651897264796-Unbelievable-Deals.jpg"alt=""/>
  </section>
  <section class="container section1 flex flex-wrap">
    <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_140,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/2/5d1b7ad3-c3ed-4ef9-a654-18231743d3cd1651484798059-Anouk-Inddus.jpg"alt=""/>
    <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_140,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/2/f7575784-edbf-411f-acc0-51891ea7f4331651484798329-Inddus-_Varanga.jpg"alt=""/>
    <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_140,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/2/ce40419d-6408-404e-9320-96e41aee1b791651484798300-Hrx-_Puma_-_More.jpg"alt=""/>
    <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_140,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/2/44192c45-7393-4ede-a926-11f30b0b92a51651484798036-All.jpg"alt=""/>
    <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_140,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/2/764761e7-c505-459e-92a2-6c4387f9e2511651484798319-Hush_Puppies-_Arrow.jpg"alt=""/> 
    <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_140,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/2/2f424664-e746-4af1-b0e1-366ccb0f2c681651484798552-Red_Tape.jpg"alt=""/>
    <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_140,c_limit,fl_progressive,dpr_2.0/assets/images/2022/5/2/a802fc48-8f5b-4d69-97ab-e6a3cf3fb70c1651484798800-USPA-_Flying_Machine.jpg"alt=""/>
  </section>
<section class="container section2">
  <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/8/7a63243f-9dfe-44e1-84dc-75883ac7870b1683531623185-Crazy-Deals.jpg"alt=""/>
</section>
<section class ="container section2 flex flex-wrap">
<a href="https://www.myntra.com/personal-care?f=Brand%3ABlue%20Heaven%2CDaily%20Life%20Forever52%2CINCOLOR%2CMARS%2CMiss%20Claire%2CSUGAR%20POP&sort=popularity">
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_61,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/9/5185ec67-1885-41e9-bf31-90b60b8fe7781683618557775-image_png_299521056.png"alt=""/></a>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_61,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/9/39c6e78f-41b7-4f34-9b3d-a32ead35801e1683618576725-image_png_383379776.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_61,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/9/0c0cd65b-b5f7-49d9-a2ab-56b6fd5b0d5d1683618608499-image_png_1240939370.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_61,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/5/0a3cd254-5d54-4cbb-95aa-436cffb9f8e61683271842088-Mamaearth-_Mcaffiene-_more.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_61,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/5/19efe887-2d43-4c73-ab99-f0cd143f78001683271841327-Ace_your_base_Make-up_-_Min_40_off-_faces_canada_and_colorbar.p.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_61,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/5/48e9f1d9-8c09-4430-819a-6fad42b706051683271842170-Most_Loved_Dresses_From__Sassafras-_Athena_-_More_-_60-80_off.p.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_61,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/5/449a7eb0-83a8-4e0e-9c6f-6f8ccf3a70ad1683271842198-Must_Have_styles_by_Vero_Moda-_ONLY__Min._60_off.png"alt=""/>
</section>
<section class="container section3">
  <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/8/bd535184-7fca-44de-9cdb-960d9589a7191683531623202-Most-Loved-Brands.jpg"alt=""/>
</section>
<section class ="container section3 flex flex-wrap">
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/27c1dea3-bfd8-44ec-9821-ab82ea83bec61683199231145-Levis.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/ef354b6c-4d02-4621-993b-a6d51a17067a1683199230733-MANGO.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/731aed8a-0eb8-4b23-9bd4-c0bac847a7eb1683199230799-Roadster-_Mast_-_Harbour_-_more.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/4f6dc4d5-1996-43e0-9897-317c9e6058471683199230917-Sassafras-_KASUALLY_-_more.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/c3a99bea-5103-4e70-a3a8-817a2e3f51f01683197864772-Nautica-_Wrogn___Min_50_-_10_off.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/a0658de5-0f51-48da-beea-40e13ff6bbc21683197864711-Bestsellers___Highlander___Flat_60_-10_off.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/5bf89aed-091b-449e-bf3b-08c214be67241683197864913-Under_399_-999-.png"alt=""/>
</section>
<section class="container section4">
  <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/8/29f91bdf-c5fb-4948-8a8e-673f49cdb8561683531623217-Top-Brands-At-Best-Prices.jpg"alt=""/>
</section>
<section class ="container section4 flex flex-wrap">
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/a166c5c5-2e77-4844-8356-37e952ec56f01683198565042-Sztori-_Kook_-_Keech.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/ffa4d015-0f23-47e1-8b47-6a0c94cc34b01683198565063-Wrogn.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/9/596fd601-eb1d-41ba-9a9b-7ee86d44e0551683620404533-image_png_386503067.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/9/97942318-680b-4a15-b8d4-3955ac6daed21683620424992-image_png_183660209.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/9/62656cca-449b-45d6-b7b5-4e1ff293ce561683620441675-image_png_1859328765.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/9/73fd3804-6efb-4e76-a198-5ac75604c8ba1683620457059-image_png1310761741.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/4/15/bcc13c8f-9126-4d07-920e-6d9ad3cf1eb81681553981966-Dressberry-_AAY.png"alt=""/>
</section>
<section class="container section5">
  <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/8/682bcddc-ecc0-49c2-8c85-ea9bf5ff506c1683531623226-Trendiest-Picks.jpg"alt=""/>
</section>
<section class ="container section5 flex flex-wrap">
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/812c8093-8dbc-43fa-a99f-e25e7becaaa51683200365794-Jack_-_Jones.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/76f5da3b-596e-4432-be51-b78c61089c331683200365808-Levis.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/cc7963a8-a508-4eb1-875e-fe5dfa317e1e1683200365051-FM.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/cb761dc8-bb46-4a3a-94da-4b966a9539e71683200365215-CK_Jeans.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/3587915d-16bb-440b-90ff-f34a6005af341683200365178-Vero_Moda.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/659bf07d-14b9-446b-a763-546fdd9b3abc1683200365553-Marks_-_Spencer.png"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_98,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/4/ad1e8935-1a91-48e1-9159-0110b62ae7471683200365506-ONLY.png"alt=""/>
</section>
<section class="container section6">
  <img class="homeImg" src="https://assets.myntassets.com/f_webp,w_980,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/8/4396ab78-e90b-4336-ac24-2f9f30ee8a5e1683531623208-Shop-By-Category.jpg"alt=""/>
</section>
<section class ="container section6 flex flex-wrap">
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/2bffae65-09a0-4263-aa06-54e7cbf91bb91683462651869-Shop-By-Category_HP_02.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/aae93250-d3f5-4b3c-8010-ed5d967717b31683462651878-Shop-By-Category_HP_03.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/af16436e-11a1-4f4f-92df-bae41dcfba2e1683462651900-Shop-By-Category_HP_05.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/61d16683-e831-4db3-b82b-950c54bf4eda1683462651912-Shop-By-Category_HP_06.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/dead53b0-3ef8-4041-aab3-0826697866a11683462651923-Shop-By-Category_HP_07.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/474f6c5a-7c95-4d7e-8f41-9e8d122bea171683462651934-Shop-By-Category_HP_08.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/c41c45e9-a743-4f0c-a1f1-e911e3c1b9911683462651967-Shop-By-Category_HP_11.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/d555aaf6-4764-4b33-85f4-565876f3081f1683462651979-Shop-By-Category_HP_12.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/53c94e92-fde5-4eab-976a-a401b517f3931683462651991-Shop-By-Category_HP_13.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/a037f185-8361-4d85-947c-d066491cfecb1683462652001-Shop-By-Category_HP_14.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/90796c99-1303-4c7e-9527-a047e2d2dfb11683462652011-Shop-By-Category_HP_15.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/f170b427-70f3-4057-b318-70025553b1011683462652022-Shop-By-Category_HP_16.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/9a601112-b439-4f34-b63f-916c6df75cef1683462652033-Shop-By-Category_HP_17.jpg"alt=""/>
  <img class="itemImg" src="https://assets.myntassets.com/f_webp,w_163,c_limit,fl_progressive,dpr_2.0/assets/images/2023/5/7/0b1d0a60-6e4f-4e72-9875-cc4a7ea8ca801683462652043-Shop-By-Category_HP_18.jpg"alt=""/>
</section>
  <section class="tall">
    
  </section>
  <h1><strong>ONLINE SHOPPING MADE EASY AT MYNTRA</strong></h1>
<p>If you would like to experience the best of online shopping for men, women and kids in India, you are at the right place. Myntra is the ultimate destination for fashion and lifestyle, being host to a wide array of merchandise including <a class="seolink" href="/clothing">clothing</a>, footwear, accessories, jewellery, personal care products and more. It is time to redefine your style statement with our treasure-trove of trendy items. Our online store brings you the latest in designer products straight out of fashion houses. You can shop online at Myntra from the comfort of your home and get your favourites delivered right to your doorstep.</p>
<h3><strong>BEST ONLINE SHOPPING SITE IN INDIA FOR FASHION</strong></h3>
<p>Be it clothing, footwear or accessories, Myntra offers you the ideal combination of fashion and functionality for men, women and kids. You will realise that the sky is the limit when it comes to the types of outfits that you can purchase for different occasions.</p>
<ul>
<li><strong>Smart men&rsquo;s clothing</strong> - At Myntra you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta and pyjama combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo, or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look with biker jackets. Head out in cloudy weather with courage in water-resistant jackets. Browse through our innerwear section to find supportive garments which would keep you confident in any outfit.</li>
<li><strong>Trendy women&rsquo;s clothing</strong> - <a class="seolink" href="/shop/women">Online shopping for women</a> at Myntra is a mood-elevating experience. Look hip and stay comfortable with chinos and printed shorts this summer. Look hot on your date dressed in a little black dress, or opt for red dresses for a sassy vibe. Striped dresses and T-shirts represent the classic spirit of nautical fashion. Choose your favourites from among Bardot, off-shoulder, shirt-style, blouson, embroidered and peplum tops, to name a few. Team them up with skinny-fit jeans, skirts or palazzos. Kurtis and jeans make the perfect fusion-wear combination for the cool urbanite. Our grand <a class="seolink" href="/saree">sarees</a> and lehenga-choli selections are perfect to make an impression at big social events such as weddings. Our salwar-kameez sets, kurtas and Patiala suits make comfortable options for regular wear.</li>
<li><strong>Fashionable footwear</strong> - While clothes maketh the man, the type of footwear you wear reflects your personality. We bring you an exhaustive lineup of options in casual shoes for men, such as sneakers and loafers. Make a power statement at work dressed in brogues and oxfords. Practice for your marathon with running shoes for men and women. Choose shoes for individual games such as tennis, football, basketball, and the like. Or step into the casual style and comfort offered by sandals, sliders, and flip-flops. Explore our lineup of fashionable footwear for ladies, including pumps, heeled boots, wedge-heels, and pencil-heels. Or enjoy the best of comfort and style with embellished and metallic flats.</li>
<li><strong>Stylish accessories</strong> - Myntra is one of the best online shopping sites for classy accessories that perfectly complement your outfits. You can select smart analogue or digital watches and match them up with belts and ties. Pick up spacious bags, backpacks, and wallets to store your essentials in style. Whether you prefer minimal jewellery or grand and sparkling pieces, our online jewellery collection offers you many impressive options.</li>
<li><strong>Fun and frolic</strong> - Online shopping for kids at Myntra is a complete joy. Your little princess is going to love the wide variety of pretty dresses, ballerina shoes, headbands and clips. Delight your son by picking up sports shoes, superhero T-shirts, football jerseys and much more from our online store. Check out our lineup of toys with which you can create memories to cherish.</li>
<li><strong>Beauty begins here </strong>- You can also refresh, rejuvenate and reveal beautiful skin with personal care, beauty and grooming products from Myntra. Our soaps, shower gels, skin care creams, lotions and other ayurvedic products are specially formulated to reduce the effect of aging and offer the ideal cleansing experience. Keep your scalp clean and your hair uber-stylish with shampoos and hair care products. Choose makeup to enhance your natural beauty.</li>
</ul>
<p>Myntra is one of the best online shopping sites in India which could help transform your living spaces completely. Add colour and personality to your bedrooms with bed linen and curtains. Use smart tableware to impress your guest. Wall decor, clocks, <a class="seolink" href="/photo-frames">photo frames</a> and artificial plants are sure to breathe life into any corner of your home.</p>
<h3><strong>AFFORDABLE FASHION AT YOUR FINGERTIPS</strong></h3>
<p>Myntra is one of the unique online shopping sites in India where fashion is accessible to all. Check out our new arrivals to view the latest designer clothing, footwear and accessories in the market. You can get your hands on the trendiest style every season in western wear. You can also avail the best of ethnic fashion during all Indian festive occasions. You are sure to be impressed with our seasonal discounts on footwear, trousers, shirts, backpacks and more. The end-of-season sale is the ultimate experience when fashion gets unbelievably affordable.</p>
<h3><strong>MYNTRA INSIDER</strong></h3>
<p>Every online shopping experience is precious. Hence, a cashless reward-based customer loyalty program called <a class="seolink" href="/myntrainsider">Myntra Insider</a> was introduced to enhance your online experience. The program is applicable to every registered customer and measures rewards in the form of Insider Points.</p>
<p>There are four levels to achieve in the program, as the Insider Points accumulate. They are - Insider, Select, Elite or Icon. Apart from offering discounts on Myntra and partner platform coupons, each tier comes with its own special perks.</p>
<p><strong>Insider</strong></p>
<ul>
<li style="list-style-type: disc;">Opportunity to master any domain in fashion with tips from celebrity stylists at Myntra Masterclass sessions.</li>
<li style="list-style-type: disc;">Curated collections from celeb stylists.</li>
</ul>
<p><strong>Elite</strong></p>
<ul>
<li style="list-style-type: disc;">VIP access to special sale events such as the End of Reason Sale (EORS) and product launches.</li>
<li style="list-style-type: disc;">Exclusive early access to Limited Edition products</li>
</ul>
<p><strong>Icon</strong></p>
<ul>
<li style="list-style-type: disc;">Chance to get on guest lists for special events.</li>
</ul>
  <h3><strong>Myntra Studio - The Personalised Fashion Feed You Wouldn&rsquo;t Want To Miss Out On</strong></h3>
<p>The world wide web is evolving at a relentless pace, and with an accelerated growth each passing year, there is bound to be an overwhelming surge of online content. It was for this very reason that personalisation of search feeds was proposed as a solution to combat the overload of irrelevant information.</p>
<p>Several social media platforms such as Facebook and Instagram along with various online shopping websites have chosen to help filter content, increasing user engagement, retention and customer loyalty.</p>
<p>Myntra is one such online shopping website that joins the list of platforms that help curate a personalised fashion feed. Named the<a class="seolink" href="/studio/home">Myntra Studio</a>, this personalised search feed brings you the latest men and women&rsquo;s fashion trends, celebrity styles, branded content and daily updates from your favourite fashion labels.</p>
<p>If you are wondering how impactful Myntra Studio can be, we are listing out five perks of having a rich, meaningful, and personalised fashion feed in your life.</p>
<ul>
<li><strong>Keep Up With What Your Favourite Fashion Icons Are Upto</strong></li>
<p>The #OOTD, AKA outfit of the day hashtag trend has been a rage among fashion bloggers and stylists. The whole concept of building an outfit from scratch and showcasing it to a huge community of enthusiasts using the hashtag has helped individuals with understanding trends and making suitable for daily wear.</p>
<p>Imagine if you could keep up with every piece of clothing and accessory worn by the fashion icons you look upto. From Sonam Kapoor to Hailey Baldwin Bieber, Myntra Studio has a &lsquo;Stories&rsquo; feature to help track celebrity fashion trends, exploring details such as their outfit of the day. This way, you would not ever miss out on the latest celebrity fashion trends, from all around the world.</p>
<li><strong>Quick Fashion Tip And Tricks</strong></li>
<p>Whether it is draping a saree into a dhoti style, wearing the right lingerie under certain dresses or discovering multiple uses out of heavy ethnic wear, Myntra Studio will help you acquire some unique and useful fashion hacks. Each hack is designed with the intention to help you get the best wear out of everything in your wardrobe.</p>
<li><strong>Updates on What Is Trending and New Product Launches</strong></li>
<p>Since fast fashion seems to be extremely hard to keep up with these days, a quick update on what is trending in accessories, clothing and footwear would certainly be of great help. Myntra Studio helps you stay connected to the most beloved and sought after brands such as Puma, Coverstory, The Label Life and so many more.</p>
<p>Your feed keeps you updated with stories of what the brands are creating including clothing, footwear and jewellery, along with their new seasonal collections.</p>
<li><strong>Explicit Step-By-Step Beauty Routines From Experts</strong></li>
<p>Just like fashion, the beauty community keeps on growing, and with brands such as Huda Beauty, MAC and the latest Kay Beauty by Katrina Kaif, are constantly coming up with mind-blowing products. Whether it is creating a no-makeup look, different winged eyeliners, do-it-yourself facial masks and other personal care beauty routines, Myntra Studio is here for you.</p>
<li><strong>Celebrity Confessions And A Look Into Their Lives</strong></li>
<p>A bonus feature that Myntra Studio has in store for you is celebrity confessions and a peek into their lives. So, Myntra helps you stay connected to your most beloved celebrities in a matter of clicks.</p>
<p>If you are very particular when it comes to the content you wish to view and engage with on social media, the ability to intricately filter content helps achieve that. Applying the same formula for hardcore fashion lovers and shoppers, Myntra Studio brings you a daily fashion fix incorporating everything that you love, all at one place. Sign up on Myntra today and start organising your fashion feed, just the way you want to.</p>
</ul>
<h3><strong>MYNTRA APP</strong></h3>
<p>Myntra, India&rsquo;s no. 1 online fashion destination justifies its fashion relevance by bringing something new and chic to the table on the daily. Fashion trends seem to change at lightning speed, yet the Myntra shopping app has managed to keep up without any hiccups. In addition, Myntra has vowed to serve customers to the best of its ability by introducing its first-ever loyalty program, The Myntra Insider. Gain access to priority delivery, early sales, lucrative deals and other special perks on all your shopping with the Myntra app. Download the Myntra app on your <a class="seolink" href="https://play.google.com/store/apps/details?id=com.myntra.android">Android</a> or <a class="seolink" href="https://itunes.apple.com/in/app/myntra-indias-fashion-store/id907394059">IOS</a> device today and experience shopping like never before!</p>
<h3><strong>HISTORY OF MYNTRA</strong></h3>
<p>Becoming India&rsquo;s no. 1 fashion destination is not an easy feat. Sincere efforts, digital enhancements and a team of dedicated personnel with an equally loyal customer base have made Myntra the online platform that it is today. The original B2B venture for personalized <a class="seolink" href="/gifts">gifts</a> was conceived in 2007 but transitioned into a full-fledged ecommerce giant within a span of just a few years. By 2012, Myntra had introduced 350 Indian and international brands to its platform, and this has only grown in number each passing year. Today Myntra sits on top of the online fashion game with an astounding social media following, a loyalty program dedicated to its customers, and tempting, hard-to-say-no-to deals.</p>
<p>The Myntra shopping app came into existence in the year 2015 to further encourage customers&rsquo; shopping sprees. Download the app on your Android or IOS device this very minute to experience fashion like never before</p>
<h3><strong>SHOP ONLINE AT MYNTRA WITH COMPLETE CONVENIENCE</strong></h3>
<p>Another reason why Myntra is the best of all online stores is the complete convenience that it offers. You can view your favourite brands with price options for different products in one place. A user-friendly interface will guide you through your selection process. Comprehensive size charts, product information and high-resolution images help you make the best buying decisions. You also have the freedom to choose your payment options, be it card or cash-on-delivery. The 30-day returns policy gives you more power as a buyer. Additionally, the try-and-buy option for select products takes customer-friendliness to the next level.</p>
<p>Enjoy the hassle-free experience as you shop comfortably from your home or your workplace. You can also shop for your friends, family and loved-ones and avail our gift services for special occasions.</p>

  <footer>
    Copyright &copy; myntra.com | All rights reserved
  </footer>
  <script src="script.js"></script>
</body>

</html>