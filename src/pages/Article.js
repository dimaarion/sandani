import React, { useState, useEffect } from 'react';
import { getArticlesRow, array_obj, getArticlesAlias } from '../actions';
import { Link } from "react-router-dom";
import '../css/home.css';
import Subart from '../components/Subart';
import Artbol from '../components/Artbol';

function Article(props) {
	const [articles, setarticles] = useState({ data: [{}], status: 0 });
	const [articlesalias, setarticlesalias] = useState({ data: [{}], status: 0 });
	useEffect(() => {
		getArticlesRow(setarticles, props.match.url);
		getArticlesAlias(setarticlesalias, props.match.url);
	}, [props.match.url]);

	return (
		<div className="container-fluid">
			{(articles.data.length !== 0) ?

				<div>
					{(articles.status === 200) ?
						<div className="row ">
							{articles.data.map((x, i) =>
								(i === 0) ?
									<div key={i + 66} className="container-fluid">
										<h2 className="text-center p-5 mt-5"><Link to={x.art_alias}>{x.art_name}</Link></h2>
										<div className="container">
											<div className="text-center"><Link to={x.art_alias}><img style={{ borderRadius: '10px' }} width="100%" src={`/img/window/${x.art_img}`} alt={x.art_name} /></Link></div>
										</div>
										<div className="container-fluid">
											<div className=" text-sm-left" style={{ fontSize: '16pt' }}>{x.art_content}</div>
										</div>
									</div>
									: <Artbol key={x.art_id + 2} art_name={x.art_name} art_alias={x.art_alias} art_img={x.art_img} art_subcontent={x.art_subcontent} />
							)}
						</div>
						: ''}
				</div>
				: <div  className="container-fluid">
					<h2 className="text-center p-5 mt-5">{articlesalias.data.art_name}</h2>
					<div className="container">
						<div className="text-center"><img style={{ borderRadius: '10px' }} width="100%" src={`/img/window/${articlesalias.data.art_img}`} alt={articlesalias.data.art_name} /></div>
					</div>
					<div className="container-fluid">
						<div className=" text-sm-left" style={{ fontSize: '16pt' }}>{articlesalias.data.art_content}</div>
					</div>
				</div>}
				
		</div>
	)
}

export default Article;