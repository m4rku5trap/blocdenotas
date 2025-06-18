import { useEffect, useState } from 'react';
import api from '../services/api';

type Note = {
  id: number;
  title: string;
  content: string;
  created_at: string;
};

type Pagination = {
  current_page: number;
  last_page: number;
};

export default function NotasList() {
  const [notes, setNotes] = useState<Note[]>([]);
  const [page, setPage] = useState(1);
  const [pagination, setPagination] = useState<Pagination>({ current_page: 1, last_page: 1 });

  useEffect(() => {
    api.get(`/notes?page=${page}`).then(res => {
      setNotes(res.data.data);
      setPagination({
        current_page: res.data.current_page,
        last_page: res.data.last_page,
      });
    });
  }, [page]);

  return (
    <div>
      <h1>Bloc de Notas</h1>
      <ul>
        {notes.map(note => (
          <li key={note.id}>
            <strong>{note.title}</strong>
            <p>{note.content}</p>
            <small>{new Date(note.created_at).toLocaleString()}</small>
          </li>
        ))}
      </ul>
      <div style={{ marginTop: '20px' }}>
        <button onClick={() => setPage(p => p - 1)} disabled={pagination.current_page === 1}>
          Anterior
        </button>
        <button onClick={() => setPage(p => p + 1)} disabled={pagination.current_page === pagination.last_page}>
          Siguiente
        </button>
      </div>
    </div>
  );
}
