import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { nombre, login, avatar, bio, seguidores, siguiendo, repos, url } = data.respuesta;

    mostrarResultado(`
        <div style="border:1px solid #ddd; border-radius:12px; padding:24px; max-width:400px; margin:0 auto;">
            <div style="display:flex; align-items:center; gap:16px;">
                <img src="${avatar}" alt="${login}" style="width:80px; height:80px; border-radius:50%;">
                <div>
                    <h2 style="margin:0;">${nombre || login}</h2>
                    <a href="${url}" target="_blank" style="color:#1a6ef7;">@${login}</a>
                </div>
            </div>
            ${bio ? `<p style="margin:12px 0; color:#555;">${bio}</p>` : ''}
            <div style="display:flex; gap:16px; margin-top:12px; text-align:center;">
                <div><b>${seguidores}</b><br><small>Seguidores</small></div>
                <div><b>${siguiendo}</b><br><small>Siguiendo</small></div>
                <div><b>${repos}</b><br><small>Repositorios</small></div>
            </div>
        </div>
    `);
}
