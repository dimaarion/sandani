import React, { useState, useEffect } from 'react';
import { getArticles, array_obj, getArticlesRow } from '../actions';
import { Link } from "react-router-dom";
import '../css/home.css';
import Subart from '../components/Subart';
import Artbol from '../components/Artbol';
function Home() {

	const [articles, setarticles] = useState({ data: [{}], status: 0 });

	useEffect(() => {
		getArticlesRow(setarticles, '/');

	}, []);


	return (

		<div className="col-sm">
			{(articles.status === 200) ?
				<div>
					<img width="100%" src="/img/slider/blvol.png" alt="slider"></img>


					<div className="row ">
						{array_obj(articles.data).map((x, i) =>

(x.params === '1')?
								<Subart key={x.art_id + 2} art_name={x.art_name} art_alias={x.art_alias} art_img={x.art_img} art_subcontent={x.art_subcontent}/>
:
								
								<Artbol key={x.art_id + 4} art_name={x.art_name} art_alias={x.art_alias} art_img={x.art_img} art_subcontent={x.art_subcontent}/>
							
							




						)}
					</div>
				</div>
				: ''}
		</div>
	)
}

export default Home;