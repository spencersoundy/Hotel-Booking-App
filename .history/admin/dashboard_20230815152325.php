<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
<?php require('inc/links.php'); ?>
</head>
<body class="bg-white">
    

<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="mb-0 h-font">SOUNDY HOTELS</h3>
    <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
</div>

<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">ADMIN PANEL</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Settings</a>
                        </li>
                    </ul>   
                </div>
            </div>
        </nav>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overf">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore aut, necessitatibus quidem corrupti ipsum rem alias? Quis eveniet nemo temporibus hic odit in ipsum esse aspernatur repellat consequuntur facilis tempora sed dignissimos enim, saepe sit fugit magnam est, itaque laborum veniam architecto ratione voluptatibus. Unde alias, delectus repudiandae quidem consequuntur aliquid aspernatur nesciunt laudantium non magni facere, libero dolor et eos molestiae beatae numquam eaque. Eveniet neque assumenda voluptate et incidunt doloribus fugiat iure, beatae magni nesciunt ratione modi accusamus. Omnis repudiandae earum cum quidem cumque quis quas alias, aspernatur suscipit consectetur dicta saepe dignissimos veritatis qui architecto quos voluptas rerum itaque incidunt voluptate voluptatum doloremque. Ab dicta officiis reprehenderit ea eius cum aspernatur repudiandae enim? Natus ratione aliquid unde tempora debitis atque aspernatur deserunt, praesentium sunt tempore doloribus reprehenderit maxime, animi magnam ducimus in similique assumenda neque consectetur, cumque exercitationem? Quos, iste tempore, nihil qui incidunt sint maxime asperiores, illum eveniet cum nam tempora necessitatibus culpa ratione repellat libero officiis vitae quisquam voluptatibus rem? Quibusdam molestias quisquam velit quidem culpa perspiciatis, repellendus reiciendis, veritatis eligendi omnis accusamus dolores cumque ullam in vel ratione inventore, aperiam obcaecati beatae? Nam officia facere quia et non, error placeat nostrum cupiditate odio magnam corrupti voluptatibus beatae saepe neque modi eveniet incidunt sunt. Consectetur culpa ullam perspiciatis quidem accusamus ea saepe nihil quis qui ex laboriosam, incidunt temporibus cumque excepturi, eum nisi aliquid eaque doloremque unde ducimus optio. Repellendus ad earum eligendi natus iste porro magnam, tempora possimus in nobis voluptate voluptatibus. Repudiandae aliquid amet, dicta, veniam porro officia quis nam alias libero facere assumenda dolore tenetur. Voluptates officiis quasi qui cupiditate aut non? Ratione nesciunt, tenetur rerum eaque totam assumenda autem accusantium quam, reprehenderit aut fuga facere vel hic laborum asperiores veritatis ipsam ducimus placeat similique, deleniti provident nemo quidem! Molestiae eum unde vitae quisquam tenetur dolores excepturi ullam. Pariatur ducimus praesentium esse odio sequi! Voluptate, pariatur? Aliquam, quaerat vero facere iste, libero dolores animi ullam velit perspiciatis, sit cum. Natus fugit officia et error. Sit, fugiat autem! Veniam, natus debitis? Vel asperiores facere in aliquam minima voluptate quia ducimus. Id fugit deserunt quo quis iure eaque recusandae aperiam exercitationem nulla est molestiae voluptates numquam aut ducimus, rerum dolor sunt voluptatibus, velit dolore distinctio blanditiis. Exercitationem similique quibusdam perferendis deserunt magni voluptatum accusamus? Quae totam inventore aperiam quo quos qui animi optio in tempore officia esse aut commodi nulla, similique, enim neque. Illo quae possimus facere, provident magnam vero asperiores nesciunt. Excepturi libero ut cupiditate illum architecto quos odio incidunt placeat voluptate? Dicta harum similique iure, iste consequatur distinctio nam nisi est. Sapiente nam autem tenetur? Aut accusamus libero similique ratione illo accusantium, qui repellat? Voluptates autem ea illo eos exercitationem atque quod sed iure impedit, ullam et repellendus voluptatibus aperiam numquam ratione beatae sapiente odio eligendi cumque, ducimus quidem sint minima velit iste. Totam iure ea deserunt illo fugit assumenda cupiditate, repellat veniam possimus neque dolorem maxime! Nam perspiciatis doloribus reprehenderit libero iste harum repudiandae suscipit ullam dolorem sequi vero ea sint rem exercitationem debitis, incidunt maxime qui eaque dignissimos? Nisi esse ipsum deleniti soluta, dignissimos illo nam iste at inventore rem voluptate velit a nesciunt repellendus, illum repellat nobis sequi. Voluptas nulla officiis ea reprehenderit in cumque, tempora culpa dignissimos similique distinctio ipsa voluptatem quae ut placeat molestias, deleniti sint necessitatibus nesciunt ducimus obcaecati. Aperiam nihil maxime autem deleniti libero veritatis cum quae distinctio. Magnam pariatur modi itaque atque dolorem, illum animi distinctio incidunt dolore id dolores magni obcaecati culpa unde et dolorum tempora molestias perferendis perspiciatis veniam aperiam. Eius, recusandae. Optio ad, consectetur quod harum alias et officia possimus fugiat sapiente similique aperiam molestiae aspernatur sit laboriosam libero deserunt inventore expedita aliquam provident quibusdam cumque. Laboriosam sint quo veritatis qui. Nam numquam expedita magnam saepe, delectus porro ab necessitatibus voluptates. Fuga hic excepturi nemo ea vitae dolores sapiente voluptas dolore, sed molestiae rem animi, beatae at! Nisi maiores expedita natus commodi voluptas totam libero, sit itaque aperiam. Fugit dolor deleniti omnis sed ex, blanditiis, aliquam voluptas fuga quod dolorem qui? Inventore maiores quis vitae eum, magnam explicabo? Veritatis porro impedit voluptates. Aperiam rem magnam voluptatibus hic delectus at accusantium officiis vero mollitia quos, minima numquam fuga reprehenderit possimus itaque voluptatum labore veniam facere culpa ex eius dignissimos voluptates! Neque, eaque delectus. Laudantium dolore earum accusamus totam a. Quo dicta, nobis et eveniet non consectetur! Eos officiis quaerat nisi ut tenetur. Libero maxime molestias hic nam, necessitatibus voluptatibus velit. Quisquam excepturi eos nam exercitationem labore dignissimos ut! At nam cumque numquam ad illum delectus sed dolores, debitis molestiae vel ex quibusdam deleniti pariatur unde accusamus minima possimus corporis quisquam omnis ipsa ab temporibus reprehenderit voluptas. Expedita vel voluptatem dolores illum, harum quibusdam minima quos reprehenderit at dolore sapiente? Beatae possimus deserunt nesciunt officia, libero fugiat eligendi cumque repellat illum quam nisi! Ab delectus id eum ad officiis amet cupiditate impedit. Optio excepturi ullam, labore suscipit itaque necessitatibus nostrum nam, officiis laborum enim recusandae esse et earum aliquam sit ut nihil hic sint ad. Vero atque fugit ipsa labore quod laborum neque repellendus cumque iusto quibusdam, voluptate cum aliquid odit corporis veniam. Quidem nemo esse quis facere eos cumque culpa modi eligendi nam. Culpa quod veritatis necessitatibus earum labore, omnis quasi neque voluptatum cumque quisquam cupiditate quo nostrum autem, sit numquam corporis unde corrupti officia dolor quas totam repudiandae quia itaque. Nesciunt odit unde amet quod sequi earum reiciendis! Sapiente, libero nihil rerum quis voluptates qui mollitia odio tempora repellat illum numquam earum suscipit laudantium, molestiae sint nesciunt non! Tempore quae minima eaque qui, aliquid velit suscipit non corporis neque illum minus maiores debitis voluptatem ea tempora adipisci! Cumque iure repellat totam architecto vel sunt sequi sed non recusandae ea inventore illum dolores tempore quam magni blanditiis ab dolorum nobis enim sint ipsa eligendi temporibus, modi quod? Tenetur facilis numquam, tempore voluptates magnam vitae debitis error quisquam vel perspiciatis, animi expedita asperiores, similique cumque illo obcaecati laborum. Aut molestias corporis aperiam at, eaque temporibus obcaecati accusamus sequi. Nemo alias ex in. Voluptatibus sunt minus, ullam facere ipsam, et impedit sint quos assumenda nostrum, velit sapiente. Neque mollitia dignissimos, veritatis error, ullam alias earum id ut molestiae hic, odio nesciunt voluptatibus porro exercitationem nam nemo debitis. Debitis dolor delectus, porro aspernatur voluptates molestias, minus ipsa obcaecati aut deleniti quibusdam. Autem nisi quam commodi veritatis et. Adipisci nulla quibusdam ipsum. Officiis inventore sed quisquam esse accusantium possimus cum ratione consequuntur consectetur, perferendis est a maiores amet velit vel incidunt labore dicta atque! Distinctio neque saepe adipisci fugiat tempora, consequatur aliquid cupiditate, voluptatum quam libero deserunt. Consequatur est dicta, corporis architecto doloribus consectetur consequuntur reprehenderit quis tempore esse numquam voluptates cum. Placeat molestiae rerum magni atque deleniti minima mollitia voluptatibus reprehenderit nostrum. Exercitationem temporibus itaque quas inventore beatae quasi, delectus odio quidem quia fugit tempora explicabo facilis eligendi omnis nihil unde ipsum atque placeat maiores deleniti obcaecati mollitia asperiores aspernatur dolore? Soluta, molestiae? Minima consequatur minus totam quas id, a quasi excepturi alias ipsa ab nam laboriosam ad deleniti obcaecati incidunt aperiam earum sequi quibusdam laudantium magni. Doloribus culpa labore explicabo doloremque consequatur! Quos iure libero, deleniti officiis odit aspernatur possimus, voluptatum reprehenderit aliquam nisi quia rerum excepturi et? Inventore nesciunt vel sunt, id quisquam iure doloribus ad modi ipsa dolores exercitationem eveniet distinctio sapiente fugit odio quidem voluptates quis in optio! Eaque totam cumque in assumenda sapiente. Similique, deserunt voluptate. Id reprehenderit illum velit! Possimus porro asperiores impedit praesentium enim distinctio minus quibusdam illum maxime, nesciunt molestiae soluta quasi eveniet ratione aut sapiente expedita atque, ipsam omnis hic facere ea blanditiis nostrum dolorum? Eaque expedita et nam velit recusandae alias debitis odio? Illo quidem sit sed dicta quaerat mollitia qui at vel nisi consequatur sequi, aperiam nobis et cupiditate placeat ab ea, aut pariatur, inventore itaque quae libero voluptates. Obcaecati, dolores fugiat tempore consequatur facilis quo sequi asperiores ut temporibus rem! Nam, sint fugiat sit culpa provident ducimus hic corporis doloremque nemo saepe quis ullam placeat deserunt voluptate id rerum officiis ad ut. Doloremque, nulla. Iste labore perferendis natus illo iure. Reiciendis aliquid corrupti omnis repellendus eligendi quis inventore error quo earum at impedit similique reprehenderit repudiandae laboriosam, velit voluptatibus, perferendis, numquam illum suscipit saepe itaque ex eius voluptatum! Qui cum tempora quisquam porro laborum mollitia tenetur, animi, asperiores quasi debitis alias assumenda nam nemo magni, accusantium labore! Asperiores tenetur optio in odit pariatur ad facere culpa maiores, beatae dolore, hic incidunt ipsum perferendis quisquam. Est soluta temporibus culpa, aperiam harum officiis rerum nobis nulla maxime error corporis consectetur ad vel natus quisquam earum, nisi quae ut? Accusamus adipisci dolore corporis quidem explicabo soluta minima placeat, sunt aspernatur voluptas corrupti dolores mollitia perspiciatis porro nesciunt quibusdam voluptatem sit ab in, voluptates laborum! Consequuntur qui ex maxime facere animi, laborum quod voluptate rem minima voluptas officiis natus voluptatibus id, molestiae doloribus fuga reprehenderit, ut iusto distinctio nesciunt unde! Laboriosam earum porro adipisci nemo recusandae inventore consectetur, accusantium hic aspernatur nihil eveniet illo dolor beatae voluptates neque fugit, suscipit cum dicta deleniti amet ratione dolore. Delectus praesentium dolores quisquam neque error assumenda itaque ratione iure. Quas dolores ab ipsam possimus at sapiente voluptatum nulla dolorum? Eveniet nisi dolores rem minima esse facere excepturi asperiores voluptatibus earum numquam deserunt ipsa corrupti recusandae quo, ducimus eos ex eligendi debitis dolorum aliquid voluptate cum suscipit dignissimos? Optio quisquam officia minima provident, eum quo corrupti nostrum cum doloribus. Itaque est illo velit tempora provident vero praesentium! Excepturi sed corporis, doloremque dolorem omnis voluptas officia ipsam laborum natus adipisci eligendi pariatur qui! Ducimus tempore hic consectetur rerum praesentium fuga magnam possimus commodi obcaecati aspernatur, ipsam nesciunt, excepturi deleniti quaerat minus aliquid eligendi. Vitae molestias, quibusdam in eligendi deleniti ducimus laudantium quis id velit quas molestiae corrupti blanditiis mollitia illo eveniet sit officiis exercitationem. Repellat, reprehenderit. Fugiat quo quos accusamus nam provident quis cumque nobis in, nulla doloribus suscipit repudiandae! Labore tempore voluptatum, veritatis corrupti earum, ullam placeat sed suscipit aspernatur rem ratione numquam? Quibusdam quae voluptatem dolore ad optio minus laborum quo, quia consequuntur adipisci vel at esse nesciunt vitae incidunt repellat ea a dicta commodi dolorum eius architecto. Error, iure deleniti nulla placeat facere, optio inventore neque tempora voluptatum mollitia at reiciendis qui pariatur! Tempore asperiores ipsum et id porro voluptate obcaecati reiciendis beatae voluptas a, repudiandae eaque possimus maxime in atque nostrum, fuga hic, qui accusantium veritatis voluptates voluptatibus? Laudantium cupiditate ab accusamus dignissimos? Provident expedita dolores aut! Sapiente recusandae est amet. Molestias odit eveniet unde possimus delectus tenetur vel libero deleniti nulla, vero est reiciendis facilis officia ipsa repudiandae illo fuga alias quo, mollitia illum. Doloribus culpa aliquam id et quos deleniti eveniet quo totam, sunt magni dicta accusantium ea sit obcaecati numquam sapiente est autem nesciunt laudantium facilis provident placeat, perferendis omnis hic. Debitis corrupti consequatur nostrum nisi eaque excepturi distinctio possimus inventore facere, minus ipsum, sit eveniet optio numquam nulla et deleniti tempora? Asperiores perferendis temporibus autem iusto, cupiditate dicta placeat molestiae rerum velit alias in sint explicabo dolorem voluptatum labore fuga quam, odio inventore magni. Aperiam recusandae, aspernatur soluta, voluptatum ullam eius porro minima laudantium similique hic obcaecati nobis neque dolore quo quod consectetur, sint maiores totam? Ab fugit magnam, exercitationem asperiores voluptates facere accusamus repudiandae quod fuga tempore necessitatibus maxime repellendus eum mollitia doloremque dolores perspiciatis? Iusto nesciunt nihil optio commodi, in sed ex corporis aut earum veritatis, harum quo quod ea. Cum voluptates, sapiente nostrum obcaecati qui delectus! Fugit quas aut porro natus est velit accusantium, assumenda repellendus dicta odit aspernatur officiis quaerat ex! Fuga consequatur dolorem natus nemo eaque consectetur, velit quas distinctio porro in soluta odit culpa maxime architecto ipsa praesentium repellat. Iure quis fuga voluptatum iste excepturi obcaecati quam officia rerum laborum deserunt suscipit, odit voluptas explicabo voluptatem ut! Sint explicabo quasi rem magnam. Deserunt odit eaque ea assumenda dignissimos provident, labore aperiam cum inventore nisi in praesentium culpa eius rerum maxime saepe! Aut corporis ex tenetur molestiae ab, nulla autem saepe voluptatibus, ut quo maiores. Cumque deleniti labore sapiente molestias. Pariatur reiciendis officiis iure facere rem eaque dicta vel?
        </div>
    </div>
</div>

<?php require('inc/scripts.php'); ?>
</body>
</html>