import api from './api';

export const getNotas = async (page = 1) => {
  const response = await api.get(`notas?page=${page}`);
  return response.data;
};
