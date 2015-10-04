/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadopcionpefil.findAll", query = "SELECT s FROM Seguridadopcionpefil s")})
public class Seguridadopcionpefil implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    private Long id;
    @Basic(optional = false)
    private long estado;
    @Basic(optional = false)
    @Column(name = "ID_OPCION_SISTEMA")
    private long idOpcionSistema;
    @Basic(optional = false)
    @Column(name = "ID_PERFIL")
    private long idPerfil;

    public Seguridadopcionpefil() {
    }

    public Seguridadopcionpefil(Long id) {
        this.id = id;
    }

    public Seguridadopcionpefil(Long id, long estado, long idOpcionSistema, long idPerfil) {
        this.id = id;
        this.estado = estado;
        this.idOpcionSistema = idOpcionSistema;
        this.idPerfil = idPerfil;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public long getEstado() {
        return estado;
    }

    public void setEstado(long estado) {
        this.estado = estado;
    }

    public long getIdOpcionSistema() {
        return idOpcionSistema;
    }

    public void setIdOpcionSistema(long idOpcionSistema) {
        this.idOpcionSistema = idOpcionSistema;
    }

    public long getIdPerfil() {
        return idPerfil;
    }

    public void setIdPerfil(long idPerfil) {
        this.idPerfil = idPerfil;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadopcionpefil)) {
            return false;
        }
        Seguridadopcionpefil other = (Seguridadopcionpefil) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadopcionpefil[ id=" + id + " ]";
    }
    
}
