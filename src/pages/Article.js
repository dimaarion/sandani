import React, { useState, useEffect } from 'react';
import { getArticlesRow } from '../actions';
import { Link } from "react-router-dom";
import '../css/home.css';
import Button from '../components/Button';

function Article(props) {
	const [articles, setarticles] = useState({ data: [{}], status: 0 });
	useEffect(() => {
		getArticlesRow(setarticles, props.match.url);

	}, [props.match.url]);
	return (
		<div className="container-fluid">
			{(articles.status === 200) ?
				<div className="row ">
					{articles.data.map((x, i) =>
						(x.id === 1) ?
							<div key={i + 66} className="container-fluid">
								<h2 className="text-center p-5 mt-5"><Link to={x.alias}>{x.names}</Link></h2>
								<div className="row container-fluid">
									<div className="col-sm">
										<div className="text-center"><Link to={x.alias}><img style={{ borderRadius: '10px' }} width="100%" src={`/img/window/${x.img}`} alt={x.names} /></Link></div>
									</div>
									<div className="col">
										<div className=" text-sm-left" style={{ fontSize: '16pt' }}>{x.content}</div>
									</div>
								</div>
							</div> :
							<div key={i + 5} className="col-sm pt-5">
								<h3 className="h3 pb-2 text-center">{x.names}</h3>
								<div className="text-center imagearts"><Link to={x.alias}><img src={`/img/window/${x.img}`} alt={x.names} /></Link></div>

							</div>
					)}
				</div>
				: ''}
		</div>
	)
}

export default Article;