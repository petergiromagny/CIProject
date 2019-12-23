/************************SQL BDD SCRIPT***********************************/

/***************************Product Table*********************************/

create table if not exists category
(
    id_category int auto_increment
        primary key,
    name        varchar(255) charset armscii8 not null,
    img         text charset armscii8         not null,
    created_at  date                          not null
)
    engine = InnoDB;

INSERT INTO feuofficial.category (id_category, name, img, created_at) VALUES (1, 'tee', 'assets/img/collection1.png', '2019-12-17');
INSERT INTO feuofficial.category (id_category, name, img, created_at) VALUES (2, 'sweat', 'assets/img/collection2.png', '2019-12-17');
INSERT INTO feuofficial.category (id_category, name, img, created_at) VALUES (3, 'cap', 'assets/img/collection3.png', '2019-12-17');

create table if not exists customer
(
    ID_user    int auto_increment
        primary key,
    username   varchar(255)  null,
    lastname   varchar(255)  not null,
    mail       text          not null,
    password   text          not null,
    firstname  varchar(255)  not null,
    created_at date          null,
    level      int default 1 null
)
    engine = InnoDB;

INSERT INTO feuofficial.customer (ID_user, username, lastname, mail, password, firstname, created_at, level) VALUES (3, 'Shiverz', 'Bosqui', 'l.bosqui@viacesi.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Louis', '2019-12-07', 1);
INSERT INTO feuofficial.customer (ID_user, username, lastname, mail, password, firstname, created_at, level) VALUES (4, 'Biroy', 'Bouclier', 'c.b@cesi.fr', '8cb2237d0679ca88db6464eac60da96345513964', 'Clem', '2019-12-07', 1);
INSERT INTO feuofficial.customer (ID_user, username, lastname, mail, password, firstname, created_at, level) VALUES (8, 'Teste', 'test', 'test@test.com', '8cb2237d0679ca88db6464eac60da96345513964', 'test', '2019-12-07', 1);
INSERT INTO feuofficial.customer (ID_user, username, lastname, mail, password, firstname, created_at, level) VALUES (9, 'Fimbu2', 'GIROMAGNY', 'p.g@me.com', '99f1f60a8cdad451fcba4b7c071c24974ac41c5f', 'Peter', '2019-12-09', 1);
INSERT INTO feuofficial.customer (ID_user, username, lastname, mail, password, firstname, created_at, level) VALUES (10, 'Fimbu', 'Giro', 'peter.giromagny@me.com', '41b65b59f150bedfaf9cfcaa5b948c2a3040d87d', 'Peter', '2019-12-10', 2);

create table if not exists product
(
    id_product  int auto_increment
        primary key,
    name        varchar(255) not null,
    price       int          not null,
    category    int          not null,
    img         text         not null,
    created_at  date         null,
    description text         not null
)
    engine = InnoDB;

create index fk_category
    on product (category);

INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (1, 'Feu Black And White', 25, 1, 'assets/img/feu_white_tee.png', '2019-12-17', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (2, 'Feu White And Gradiant', 25, 1, 'assets/img/feu_white_gradiant_tee.png', '2019-12-17', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (3, 'Feu Black And White', 25, 1, 'assets/img/feu_black_tee.png', '2019-12-17', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (4, 'Feu Black And Gradiant', 25, 1, 'assets/img/feu_black_gradiant_tee.png', '2019-12-17', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (5, 'White Tee Elegant', 25, 1, 'assets/img/white_tee.png', '2019-12-18', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (6, 'Red Tee Elegant', 25, 1, 'assets/img/red_tee.png', '2019-12-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (7, 'Blue Tee Elegant', 25, 1, 'assets/img/blue_tee.png', '2019-12-07', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (8, 'Test sweat', 75, 2, 'assets/img/blue_tee.png', '2019-12-12', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
INSERT INTO feuofficial.product (id_product, name, price, category, img, created_at, description) VALUES (9, 'Test cap', 15, 3, 'assets/img/red_tee.png', '2019-12-16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aut doloremque eius eligendi est eveniet excepturi illo incidunt laboriosam mollitia, officiis quod vero voluptatem. Adipisci eum magnam nobis perferendis voluptate?
');
