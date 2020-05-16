import React from 'react';
import { NavLink } from "react-router-dom";
import '../css/menu.css';
import { array_obj } from '../actions'
function Menu(props) {
	
	return (
		<nav id="menu" style={{ marginTop: '60px' }}>
			<ul className="nav justify-content-end">
				{
					array_obj(props.menu).map((x,i) =>
						<li
							className="nav-item"
							key={i}>
							<NavLink
								className="nav-link"
								exact 
								to={`${x.alias}`}
								activeStyle={{
									borderBottom: "solid 2px green",
								
								}}
								style={{
									color: 'rgb(65, 77, 66)',
									fontSize: '13pt'
								}}
								onMouseOver={() => props.setstate({ lin: true, podMenu: x.cild})}
								
								>
								{x.names}
								
							</NavLink>
							<div></div>
						</li>
					)

				}
			</ul>
		</nav>
	)
}

export default Menu;