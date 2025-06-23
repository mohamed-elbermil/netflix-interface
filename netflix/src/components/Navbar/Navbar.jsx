import React from 'react';
import style from './Navbar.module.css'
import Netflix from "../../assets/images/netflix.png"
import Avatar from "../../assets/images/avatar.png"

const Navbar = () => {
  return (
    <>
    <nav>
      <div className={style.leftElement}>
        <img src={Netflix} alt="Logo Netflix" className={style.netflix}/>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Série</a></li>
            <li><a href="#">Film</a></li>
            <li><a href="#">Nouveauté les plus regardées</a></li>
            <li><a href="#">Ma liste</a></li>
            <li><a href="#">Explorer ma langue</a></li>
        </ul>
      </div>
        <ul>
            <i class="fa-solid fa-magnifying-glass"></i>    
            <i class="fa-solid fa-bell"></i>
            <div className="avatar">
                <img src={Avatar} alt="" className={style.avatar}/>
                <i>icon</i>
            </div>    
        </ul>
    </nav>
    </>
  );
};

export default Navbar;
