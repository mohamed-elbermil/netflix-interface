import React from 'react';
import style from './Header.module.css'
import Navbar from '../Navbar/Navbar';

const Header = () => {
  return (
    <>
    <Navbar/>
    <h1>N°2 des séries TV aujourd'hui</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam hic rem corrupti doloremque id fugiat delectus explicabo, quidem obcaecati corporis iure? Illo placeat ipsa voluptas nostrum accusantium vitae. Animi doloribus distinctio nobis temporibus minima? Fuga accusantium illum quidem, vel maiores repellendus ad ut! Quia vitae, voluptatibus labore id a quidem.</p>
    <div className={style.btn}>
        <a href="#">Lecture</a>
        <a href="#">Plus d'infos</a>
    </div>
    </>
  );
};

export default Header;
