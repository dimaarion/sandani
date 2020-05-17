import React, { useState, useEffect } from 'react';
import { getArticles } from '../actions';
import { Link } from "react-router-dom";
import '../css/home.css';
import Button from '../components/Button';
function Home() {

	const [articles, setarticles] = useState({ data: [{}], status: 0 });

	useEffect(() => {
		getArticles(setarticles);

	}, []);
	return (
		<div className="col-sm">

			<img width="100%" src="/img/slider/blvol.png"  alt = "slider"/>
			<div className="row ">
				{articles.data.map((x, i) =>
					(x.id === 1) ?
						<div key={i + 66} className="container-fluid">
							<h2 className="text-center p-5 mt-5"><Link to={x.alias}>{x.names}</Link></h2>
							<div className="row container-fluid">
								<div className="col-sm">
									<div className="text-center"><Link to = {x.alias}><img style = {{borderRadius:'10px'}} width="100%" src={`/img/window/${x.img}`} alt={x.names} /></Link></div>
								</div>
								<div className="col">
									<div className=" text-sm-left" style = {{fontSize:'16pt'}}>{x.content}</div>
									<Button alias = {x.alias}/>
								</div>
							</div>
						</div> :
						<div key={i + 5} className="col-sm pt-5">
							<h3 className = "h3 pb-2 text-center">{x.names}</h3>
							<div className="text-center imagearts"><Link to = {x.alias}><img  src={`/img/window/${x.img}`} alt={x.names} /></Link></div>
							
						</div>
				)}
			</div>
		</div>
	)
}

export default Home;