
use library;

show tables;

desc books;

select * from books;
alter table books add data_lancamento varchar(20);

insert into books (name, descricao, data_lancamento) values
('A culpa é das estrelas', 'Hazel Grace Lancaster e Augustus Waters são dois adolescentes que se conhecem em um grupo de apoio para pacientes com câncer. Por causa da doença, Hazel sempre descartou a ideia de se envolver amorosamente, mas acaba cedendo ao se apaixonar por Augustus. Juntos, eles viajam para Amsterdã, onde embarcam em uma jornada inesquecível.', '5 de junho de 2014	');
('O Estrangeiro'),
('Em Busca do Tempo Perdido '),
('O Processo'),
('O Pequeno Príncipe'),
('A Condição Humana'),
('Viagem ao Fim da Noite'),
('As Vinhas da Ira'),
('Por Quem os Sinos Dobram'),
('O Bosque das Ilusões Perdidas'),
('A Espuma dos Dias'),
('O Segundo Sexo'),
('Esperando Godot'),
('O Ser e o Nada'),
('O Nome da Rosa'),
('Arquipélago Gulag'),
('Palavras'),
('Álcoois'),
('O Lótus Azul'),
('O Diário de Anne Frank');


show tables;
desc customers;
select * from customers;
insert into customers (name) values
('Maria'),
('José'),
('Antônio'),
('João'),
('Francisco'),
('Ana'),
('Luiz'),
('Paulo'),
('Carlos'),
('Manoel'),
('Pedro'),
('Francisca'),
('Marcos'),
('Raimundo'),
('Sebastião'),
('Antônia'),
(' Marcelo'),
('Jorge'),
('Márcia'),
('Geraldo');

SELECT * FROM books b left join authors a on b.id_=a.id;
SELECT * FROM books;
UPDATE books set name = "teste" where id_=13;
UPDATE books SET name='teste', descricao='teste', data_lancamento = 'teste', img='teste' WHERE id_='2';

show tables;
desc authors;
select * from authors;
insert into authors (name,book_id) values
('John Green',1);
('Albert Camus',2),
('Marcel Proust',3),
('Franz Kafka',4),
('Antoine de Saint-Exupéry',5),
('André Malraux',6),
('Louis-Ferdinand Céline',7),
('John Steinbeck ',8),
('Ernest Hemingway',9),
('Alain-Fournier',10),
('Boris Vian',11),
('Simone de Beauvoir',12),
('Samuel Beckett',13),
('Jean-Paul Sartre',14),
('Umberto Eco',15),
('Alexander Soljenítsin ',16),
('Jacques Prévert',17),
('Guillaume Apollinaire',18),
('Hergé',19),
('Anne Frank',20);



select * from requests;
insert into requests (book_id) select id from books;
select * from suppliers;
insert into suppliers (name_fantasy, address, email, contact_phone) values
('Pruddentebook','AV. Tamoios, 75','Pruddentebook@gmail.com', '14987640764'),
('Pessegobook','AV. Juaniqui, 876','Pessegobook@gmail.com', '14989348756'),
('Bomcombook','AV. Pingh, 2345','Bomcombook@gmail.com', '14991279818'),
('Kaisbook','AV. Runoam, 456','Kaisbook@gmail.com', '14996164712'),
('Lengobook','AV. Esmeralda, 65','Lengobook@gmail.com', '14996156061');