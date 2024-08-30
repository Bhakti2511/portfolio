// Context (Warehouse)
// Provider (delivery boy)
// Consumer / useContext(me)

import React, { useContext, useEffect, useState } from 'react';

export const API_URL = `https://www.omdbapi.com/?apikey=28a75217`;

const AppContext = React.createContext();

//create a provider fun
const AppProvider = ({ children }) => {

  const [isLoading , setisLoading] = useState(true);
  const [movie , setmovie] = useState([]);
  const [Error , setError] = useState({ show : "false" , msg : ""});
  const [query , setQuery] = useState("student");

  const getMovies= async(url)=>{
    setisLoading(true);
    try{
      const res = await fetch(url);
      const data = await res.json();
      // console.log(data);

      if(data.Response==="True"){
        setisLoading(false);
        setError({
          show: "false",
          msg: data.Error,
        });
        setmovie(data.Search);
      }
      else
      {
        setError({
          show:"true",
          msg:data.Error,
        });
      }
    }
    catch(error){
      console.log(error);
    }
  }

  useEffect(() => {
    var TimerOut = setTimeout(()=>{
        getMovies(`${API_URL}&s=${query}`);
  }, 800 );
    return ()=> clearTimeout(TimerOut);
  }, [query]);

  return (
    <AppContext.Provider
      value={{ isLoading, movie, Error, query, setQuery, isLoading }}>
      {children}
    </AppContext.Provider>
  );
};

const useGlobalContext =()=>{
  return useContext(AppContext);
};

export { AppContext , AppProvider , useGlobalContext};