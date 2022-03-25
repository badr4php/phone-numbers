import React, { useState, useEffect } from 'react';

import Container from 'react-bootstrap/Container';
import {Api} from "./services/Api";
import Headr from "./components/Headr";
import List from "./components/List";
import {setQueryString} from "./helpers/helpers";
import './App.css';


const App = () => {
  let url = process.env.REACT_APP_SERVICE_URL;
  const [data, setData] = useState([]);
  const [filters, setFilters] = useState({});
  const getdata = async () => {
    const response = await Api.get(url);
    setData(response.data);
  };
  const onCountryChange = (e) => {
    setFilters({ ...filters, country: e.target.value });
    url = process.env.REACT_APP_SERVICE_URL + `?${setQueryString({ ...filters, country: e.target.value })}`;
    getdata();
  }

  const onStateChange = (e) => {
    setFilters({ ...filters, state: e.target.value });
    url = process.env.REACT_APP_SERVICE_URL + `?${setQueryString({ ...filters, state: e.target.value })}`;
    getdata();
  }
  console.log(data);
  useEffect(() => {
      getdata();
  },[]);
  return(
  <Container className="p-3">
    <Container className="p-5 mb-4 bg-light rounded-3">
      <h1 className="header">Phone Numbers</h1>
      <Headr onCountryChange={onCountryChange} onStateChange={onStateChange}/>
      <List data={data} />
    </Container>
  </Container>
);
}

export default App;
