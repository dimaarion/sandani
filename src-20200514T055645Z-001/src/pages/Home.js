import React, { useState, useEffect } from 'react';
import { getArticles } from '../actions';

function getart(params) {
	let art;
	for (let i = 0; i < params.length; i++) {

		art = [{ "alias": params[i] }, { "names": params[i] }, { "img": params[i] }]



	}
	return art;
}

function Home() {

	const [articles, setarticles] = useState({ data: [{}], status: 0 });

	useEffect(() => {
		getArticles(setarticles);

	}, []);
	return (
		<div>

			<img width="100%" src="/img/slider/headlog.png" />
			<div className = "row">
			
			</div>
		</div>
	)
}

export default Home;