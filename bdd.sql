/************************SQL BDD SCRIPT***********************************/

/***************************Product Table*********************************/

create table if not exists product
(
    id_product int auto_increment
        primary key,
    name       varchar(255) not null,
    price      int          not null,
    category   varchar(255) null,
    img        text         not null
);

INSERT INTO feuofficial.product (id_product, name, price, category, img, description) VALUES (1, 'Feu Black And White', 25, 'tee', 'assets/img/feu_white_tee.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, description) VALUES (2, 'Feu White And Gradiant', 25, 'tee', 'assets/img/feu_white_gradiant_tee.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, description) VALUES (3, 'Feu Black And White', 25, 'tee', 'assets/img/feu_black_tee.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, description) VALUES (4, 'Feu Black And Gradiant', 25, 'tee', 'assets/img/feu_black_gradiant_tee.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, description) VALUES (5, 'White Tee | Elegant', 25, 'tee', 'assets/img/white_tee.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, description) VALUES (6, 'Red Tee | Elegant', 25, 'tee', 'assets/img/red_tee.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, description) VALUES (7, 'Blue Tee | Elegant', 25, 'tee', 'assets/img/blue_tee.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');

/***************************User Table*********************************/

-- auto-generated definition
create table user
(
    ID_user   int auto_increment
        primary key,
    username  varchar(255) null,
    lastname  varchar(255) not null,
    mail      text         not null,
    password  text         not null,
    firstname varchar(255) not null,
    constraint user_username_uindex
        unique (username)
);