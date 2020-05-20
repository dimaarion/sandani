import React from 'react';
import ReactDOM from 'react-dom';
import './css/index.css';
import App from './App';
import * as serviceWorker from './serviceWorker';
import { BrowserRouter as Router } from "react-router-dom";
import Footer from './components/Footer';
ReactDOM.render(
  <React.StrictMode>
  <Router>
    <App />
    <Footer/>
  </Router>
  </React.StrictMode>,
  document.getElementById('root')
);
serviceWorker.unregister();
