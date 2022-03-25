export const setQueryString = (filters) => {
    let queryString = "";
    Object.entries(filters).forEach(([key, value]) => {
      queryString += `&${key}=${value}`;
      return queryString;
    });
    return queryString;
  };