Create Table version(
    id int not null primary key AUTO_INCREMENT COMMENT 'Primary Key',
    version char(32) not Null,
    description varchar(255) Comment 'Description',
    created_at DATETIME COMMENT 'Create Time'
)Comment '';