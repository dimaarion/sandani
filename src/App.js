import React, { useState, useEffect } from 'react';
import './css/App.css';
import {
  Switch,
  Route,
  NavLink,
  Link
} from "react-router-dom";
import Menu from './components/Menu';
import Err from './pages/Err';
import Home from './pages/Home';
import Article from './pages/Article';
import Load from './components/Load';
import Logo from './components/Logo';
import { getMenu, getLogo, array_obj, menuPod, getPodMenu, connectPanel, getArticles } from './actions'
import Footer from './components/Footer';
import Message from './pages/Message';
import Calculator from './Calculator';

function App() {
  const [menu, setmenu] = useState({ data: [{}], status: 0 });
  const [logotype, setlogotype] = useState({ data: [{}], status: 0 });
  const [articles, setarticles] = useState({ data: [{}], status: 0 });
  const [podmenu, setpodmenu] = useState({ data: [{}], status: 0 });
  const [connectpanel, setconnectpanel] = useState({ data: [{}], status: 0 });
  const [state, setstate] = useState({ lin: false, podMenu: [{}] });
  const [footer, setfooter] = useState(0);
  useEffect(() => {
    getMenu(setmenu);
    getLogo(setlogotype);
    getPodMenu(setpodmenu);
    connectPanel(setconnectpanel);
    getArticles(setarticles);
  }, []);
document.onscroll = ()=>{
 
    setfooter(window.scrollY + '/' + window.innerHeight);

   
}
  let bac;
  let t = true;
  if (t === false) {
    bac = { backgroundImage: 'url(/img/16_col.gif)' };
  } else {
    bac = {};
  }

  return (
    <div className="App container-fluid p-0" style={bac}>
    
      <div className="row justify-content-md-center">
        <div className="col col-lg-1"></div>
        <div className="col-sm-2">
          <Logo logotype={logotype.data} />
        </div>
        <div className="col-sm">
          <Menu menu={menu.data} setstate={setstate} />
        </div>
        <div className="col col-lg-1"></div>
      </div>
      <div style={{
        height: '1px',
        width: '100%',
        backgroundColor: '#cccccc',
        marginTop: '-4px'
      }}>
      </div>
      {(state.lin === true && state.podMenu.length !== 0) ?
        <div onMouseOver={() => setstate({ lin: true, podMenu: state.podMenu })} className="container mt-4 podmenu">

          <div className="row text-left">
            {
              array_obj(state.podMenu).map((x, i) =>
                <div className="col-sm-3 p-4" key={i + 55}>
                  <div className="col-sm item_head">
                    <NavLink activeStyle={{ textDecorationLine: 'revert' }} onMouseOver={() => setstate({ lin: true })} to={`${x.menu_alias}`}>
                      {x.menu_name}
                    </NavLink>
                  </div>
                  {(array_obj(x.cild).length !== 0) ? menuPod(x, setstate) : ''}
                </div>
              )

            }
          </div>
          <div onMouseOut={() => setstate({ lin: false, podMenu: [] })} className="container " style={{ height: '20px', zIndex: 1000 }}></div>
        </div>

        : ''
      }
      <div className="container">
        <div className="row p-4">
          {(connectpanel.status === 200) ? connectpanel.data.map((x) =>
            <div className="col-sm " key={x.id + 23}>
              <div className="row">
                <div className="col-sm-3">
                <Link to = {x.alias}><img width="70px" src={`/img/icon/${x.img}`} alt={x.names} /></Link>  
                </div>
                <div className="col-sm-8" style={{ fontSize: '18pt' }}>
                  <Link to={x.alias}>{x.names}</Link>
                </div>
              </div>

            </div>
          ) : ''}


        </div>

      </div>
      <div className="row justify-content-md-center">
        <div className="col col-lg-1"></div>
        <div className="col-sm">

          {
            (menu.status === 200) ?

              <Switch>
                <Route exact path="/" component={Home} />
                <Route path="/message.html" component={Message} />
                <Route path="/calculator.html" component={Calculator} />
                {
                  podmenu.data.map((x, i) =>
                    <Route key={i + 22} path={`/${x.menu_alias}`} component={Article} />
                  )
                }
                {
                  articles.data.map((x, i) =>
                    <Route key={i + 22} path={`/${x.art_alias}`} component={Article} />
                  )
                }
                <Route
                  component={Err} />
              </Switch>
              : <Load />
          }
        </div>
        <div className="col col-lg-1"></div>
      </div>
      {(footer > '100') ?
        <Footer />
        : ''}
    </div>

  );
}

export default App;
